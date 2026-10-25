<?php

namespace Tests\Feature;

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class SecurityHeadersTest extends TestCase
{
    public function test_it_sets_security_headers_and_a_report_only_policy(): void
    {
        $response = $this->get('/up');

        $response->assertOk()
            ->assertHeader('X-Content-Type-Options', 'nosniff')
            ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin')
            ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
            ->assertHeader('Permissions-Policy', 'camera=(), microphone=(), geolocation=()')
            ->assertHeader('Content-Security-Policy-Report-Only', config('security.content_security_policy'));

        $this->assertFalse($response->headers->has('Content-Security-Policy'));
        $this->assertFalse($response->headers->has('Strict-Transport-Security'));
    }

    public function test_security_headers_are_added_to_not_found_responses(): void
    {
        $this->get('/route-that-does-not-exist')
            ->assertNotFound()
            ->assertHeader('X-Content-Type-Options', 'nosniff')
            ->assertHeader('Content-Security-Policy-Report-Only', config('security.content_security_policy'));
    }

    public function test_it_enables_hsts_only_for_secure_production_requests(): void
    {
        $this->app['env'] = 'production';

        $response = app(SecurityHeaders::class)->handle(
            Request::create('/', 'GET', [], [], [], ['HTTPS' => 'on']),
            fn () => new Response,
        );

        $this->assertSame('max-age=15552000', $response->headers->get('Strict-Transport-Security'));

        $this->app['env'] = 'testing';
        $httpResponse = app(SecurityHeaders::class)->handle(
            Request::create('/'),
            fn () => new Response,
        );

        $this->assertFalse($httpResponse->headers->has('Strict-Transport-Security'));
    }

    public function test_login_and_unauthenticated_admin_responses_are_not_cached(): void
    {
        $this->get('/login')
            ->assertOk()
            ->assertHeader('Cache-Control', 'no-store, private');

        $this->get('/admin')
            ->assertRedirect()
            ->assertHeader('Cache-Control', 'no-store, private');
    }

    public function test_it_disables_caching_for_authentication_and_admin_routes(): void
    {
        foreach (['/login', '/logout', '/admin', '/admin/news'] as $uri) {
            $response = app(SecurityHeaders::class)->handle(
                Request::create($uri),
                fn () => new Response,
            );

            $this->assertSame('no-store, private', $response->headers->get('Cache-Control'));
        }
    }

    public function test_it_disables_caching_for_responses_that_set_a_cookie(): void
    {
        $response = app(SecurityHeaders::class)->handle(
            Request::create('/'),
            function () {
                $response = new Response;
                $response->headers->set('Set-Cookie', 'session=value');

                return $response;
            },
        );

        $this->assertSame('no-store, private', $response->headers->get('Cache-Control'));
    }

    public function test_it_removes_the_powered_by_header_and_does_not_allow_wildcard_origins(): void
    {
        $response = app(SecurityHeaders::class)->handle(
            Request::create('/'),
            function () {
                $response = new Response;
                $response->headers->set('X-Powered-By', 'PHP');

                return $response;
            },
        );

        $this->assertFalse($response->headers->has('X-Powered-By'));
        $this->assertStringNotContainsString('*', $response->headers->get('Content-Security-Policy-Report-Only'));
    }
}
