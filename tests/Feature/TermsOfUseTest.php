<?php

namespace Tests\Feature;

use App\Services\SitemapService;
use Tests\TestCase;

class TermsOfUseTest extends TestCase
{
    public function test_terms_of_use_are_public_and_link_to_related_legal_policies(): void
    {
        $this->get('/condiciones-de-uso')
            ->assertOk()
            ->assertSee('Condiciones de uso')
            ->assertSee('Finalidad del sitio')
            ->assertSee('política de privacidad')
            ->assertSee('política de cookies')
            ->assertDontSee('name="robots" content="noindex', false);
    }

    public function test_terms_of_use_are_linked_from_the_footer(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(route('terms'), false)
            ->assertSee('Condiciones de uso');
    }

    public function test_terms_of_use_are_included_in_the_public_sitemap(): void
    {
        $entries = app(SitemapService::class)->entries();

        $this->assertContains(
            ['loc' => rtrim(config('app.url'), '/').'/condiciones-de-uso'],
            $entries,
        );
    }
}
