<?php

namespace Tests\Feature;

use Tests\TestCase;

class RobotsTest extends TestCase
{
    public function test_robots_file_declares_the_canonical_sitemap_without_blocking_public_assets(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertNotFalse($robots);
        $this->assertStringContainsString('User-agent: *', $robots);
        $this->assertStringContainsString('Allow: /', $robots);
        $this->assertStringContainsString(
            'Sitemap: https://proyectoplanclimac2.org/sitemap.xml',
            $robots,
        );
        $this->assertStringNotContainsString('Disallow:', $robots);
    }

    public function test_login_response_is_not_indexable(): void
    {
        $this->get('/login')
            ->assertOk()
            ->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive')
            ->assertSee('<meta name="robots" content="noindex, nofollow, noarchive">', false);
    }

    public function test_unauthenticated_admin_redirect_is_not_indexable(): void
    {
        $this->get('/admin')
            ->assertRedirect(route('login'))
            ->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive');
    }
}
