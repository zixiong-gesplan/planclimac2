<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlueCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public int $progress,
        public int $target
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.home.components.BlueCard');
    }
}
