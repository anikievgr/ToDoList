<?php

namespace App\View\Components\Form\Components;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $name;
    public array $data;
    public string $label;
    public function __construct(string $name, array $data, string $label)
    {
        $this->name = $name;
        $this->data = $data;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.components.select');
    }
}
