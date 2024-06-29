<?php

namespace App\View\Components\partials\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class featured extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.home.featured');
    }
}
