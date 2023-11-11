<?php

namespace App\View\Components\Stage;

use Illuminate\View\Component;

class Stage extends Component
{
    /**
     * Cтадия тасков
     *
     * @return void
     */
    public array $tasks;
    public string $name;
    public function __construct(array $tasks, string $name)
    {
        $this->tasks = $tasks;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stage.stage');
    }
}
