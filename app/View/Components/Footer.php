<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $startYear = "2024";
        $currentYear = date("Y", time());
        $copyright = "";

        if ($startYear == $currentYear) {
            $copyright = "opyright {$currentYear}";
        } else {
            $copyright = "opyright {$startYear} - {$currentYear}";
        }

        return view('components.footer', compact('copyright'));
    }
}
