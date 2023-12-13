<?php

namespace App\Livewire;

use App\Models\Option;
use Livewire\Component;
use Livewire\Attributes\On;

class Polls extends Component
{
    public function render()
    {

        $polls = \App\Models\Poll::with('options.votes')->latest()->get();

        return view('livewire.polls', [
            'polls' => $polls
        ]);
    }

    #[On('pollCreated')]
    public function updatePollsList()
    {
        $this->dispatch('refresh');
    }

    public function vote(Option $option)
    {
        // $option = \App\Models\Option::findOrFail($optionId);
        $option->votes()->create();
    }

}
