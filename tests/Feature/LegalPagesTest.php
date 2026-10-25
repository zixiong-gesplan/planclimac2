<?php

namespace Tests\Feature;

use App\Services\SitemapService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LegalPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_legal_notice_is_public_and_shows_unconfirmed_operator_details(): void
    {
        $this->get('/aviso-legal')
            ->assertOk()
            ->assertSee('Aviso legal')
            ->assertSee('Titularidad y datos del prestador')
            ->assertSee('Pendiente de confirmación por la entidad responsable.')
            ->assertDontSee('name="robots" content="noindex', false);
    }

    public function test_accessibility_statement_does_not_claim_unverified_conformance(): void
    {
        $this->get('/declaracion-de-accesibilidad')
            ->assertOk()
            ->assertSee('Declaración de accesibilidad')
            ->assertSee('no se ha completado una evaluación técnica formal')
            ->assertSee('no se declara que el sitio sea plenamente conforme')
            ->assertSee('mailto:'.config('legal.controller_email'), false)
            ->assertDontSee('name="robots" content="noindex', false);
    }

    public function test_both_pages_are_linked_from_the_footer(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(route('legal-notice'), false)
            ->assertSee(route('accessibility'), false);
    }

    public function test_both_pages_are_in_the_public_sitemap(): void
    {
        $urls = collect(app(SitemapService::class)->entries())->pluck('loc');
        $baseUrl = rtrim(config('app.url'), '/');

        $this->assertContains($baseUrl.'/aviso-legal', $urls);
        $this->assertContains($baseUrl.'/declaracion-de-accesibilidad', $urls);
    }
}
