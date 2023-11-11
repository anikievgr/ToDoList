<?php

namespace App\View\Components\Form\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $type;
    public string $name;
    public string $label;
    public function __construct(string $type, string $name, string $label)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.components.input');
    }
}
