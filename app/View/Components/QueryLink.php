<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QueryLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $query,
        public string $label
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.news.components.QueryLink');
    }
}
