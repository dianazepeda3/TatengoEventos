<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navegacion extends Component
{
    /**
     * Create a new component instance.
     */

    public string $sel;

    public function __construct(String $sel)
    {
        $this->sel = $sel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.navegacion');
    }
}
