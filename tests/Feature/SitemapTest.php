<?php

namespace Tests\Feature;

use App\Services\SitemapService;
use Mockery;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    public function test_it_returns_a_valid_xml_sitemap_with_public_urls(): void
    {
        $sitemap = Mockery::mock(SitemapService::class);
        $sitemap->shouldReceive('entries')
            ->once()
            ->andReturn([
                ['loc' => 'https://proyectoplanclimac2.org/'],
                [
                    'loc' => 'https://proyectoplanclimac2.org/news/42',
                    'lastmod' => '2026-10-25T10:30:00+00:00',
                ],
            ]);

        $this->app->instance(SitemapService::class, $sitemap);

        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');
        $response->assertSee('https://proyectoplanclimac2.org/', false);
        $response->assertSee('https://proyectoplanclimac2.org/news/42', false);
        $response->assertSee('2026-10-25T10:30:00+00:00', false);
        $response->assertDontSee('/admin', false);
        $response->assertDontSee('/login', false);
    }
}
