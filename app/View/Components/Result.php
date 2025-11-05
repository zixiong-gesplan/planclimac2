<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Result extends Component
{
    public array $text;

    public function __construct(array|string $text = [])
    {
        $this->text = is_array($text)
            ? $text
            : ['es'=>$text, 'pt'=>$text, 'en'=>$text, 'fr'=>$text];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.results.components.Result');
    }
}
