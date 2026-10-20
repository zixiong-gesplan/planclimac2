<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectIndicator extends Component
{
    /**
     * @param array{id:string,category:string,icon:string,title:array<string,string>,progress:int,target?:int} $indicator
     */
    public function __construct(
        public array $indicator,
        public bool $featured = false,
        public bool $spotlight = false,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('Front.home.components.ProjectIndicator');
    }
}
