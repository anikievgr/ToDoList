<?php

namespace App\View\Components;

use Illuminate\View\Component;

class add extends Component
{
    /**
     * Кнопка на добавление элемента(переход)
     *
     * @return void
     */
    public string $message;
    public string $action;
    public function __construct(string $message, string $action)
    {
        $this->message = $message;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add');
    }
}
