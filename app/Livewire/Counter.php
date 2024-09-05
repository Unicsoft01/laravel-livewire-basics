<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // all public var must be defined here 
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
