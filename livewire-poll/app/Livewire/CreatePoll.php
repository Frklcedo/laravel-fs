<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{

    public string $title;
    public array $options = [''];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }
    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    // public function mount()
    // {

    // }
}
