<?php

namespace App\View\Components\Form\Components;

use Illuminate\View\Component;

class Errors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $field;
    public function __construct(string $field)
    {
        $this->field = $field; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.components.errors');
    }
}
