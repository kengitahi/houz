<?php

namespace App\View\Components\partial\sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class purposeIndicator extends Component
{
    public $purpose;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partial.sections.purpose-indicator', ['purpose' => $this->purpose]);
    }
}
