<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component
{
    /**
     * Get the view / contents that repserents the components.
     */
    public function render(): view
    {
        return view('layouts.dashboard');
    }
}