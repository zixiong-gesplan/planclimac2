<?php

namespace App\Services;

use App\Models\News;
use DateTimeInterface;

class SitemapService
{
    /**
     * Public URLs that are intended to be indexed independently of news.
     *
     * @var list<string>
     */
    private const STATIC_PATHS = [
        '/',
        '/news',
        '/statistics',
        '/results',
        '/contact',
        '/politica-de-privacidad',
        '/politica-de-cookies',
        '/condiciones-de-uso',
        '/aviso-legal',
        '/declaracion-de-accesibilidad',
    ];

    /**
     * Build sitemap entries from the canonical application URL and the news
     * that is publicly available through the site.
     *
     * @return list<array{loc: string, lastmod?: string}>
     */
    public function entries(): array
    {
        $entries = array_map(
            fn (string $path): array => ['loc' => $this->url($path)],
            self::STATIC_PATHS,
        );

        $news = News::query()
            ->select(['id', 'updated_at'])
            ->orderBy('id')
            ->get();

        foreach ($news as $item) {
            $entry = ['loc' => $this->url('/news/'.$item->getKey())];

            if ($item->updated_at instanceof DateTimeInterface) {
                $entry['lastmod'] = $item->updated_at
                    ->utc()
                    ->format(DateTimeInterface::ATOM);
            }

            $entries[] = $entry;
        }

        return $entries;
    }

    private function url(string $path): string
    {
        return rtrim((string) config('app.url'), '/').($path === '/' ? '/' : $path);
    }
}
