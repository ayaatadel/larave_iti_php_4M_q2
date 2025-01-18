<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonComponent extends Component
{
    public $name;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($class='primary',$name='click')
    {
        //
        $this->name=$name;
        $this->class=$class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-component');
    }
}
