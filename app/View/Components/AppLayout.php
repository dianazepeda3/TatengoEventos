<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{    
    /**
     * Get the view / contents that represents the component.
     */
    public string $sel;

    public function __construct(String $sel)
    {
        $this->sel = $sel;
    }

    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
