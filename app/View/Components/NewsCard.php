<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $src,
        public string $title,
        public string $date,
        public string $description,
        public string $id,
        public array $tags
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.news.components.NewsCard');
    }
}
