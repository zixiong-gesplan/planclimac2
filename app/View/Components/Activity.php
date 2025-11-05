<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class activity extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  array<string,string>  $description  Mapa de textos por idioma (ej: ['es'=>'Título', 'en'=>'Title'])
     */
    public function __construct(
        public string $id,
        public array $description
    ) {
        //
    }

    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.home.components.Activity');
    }
}
