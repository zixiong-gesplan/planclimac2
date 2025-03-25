<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PartnerCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $src,
        public string $alt,
        public string $caption,
        public string $href
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.home.components.PartnerCard');
    }
}
