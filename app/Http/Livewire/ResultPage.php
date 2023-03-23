<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultPage extends Component
{
    public function mount($data){
        dd($data);
    }
    public function render()
    {
        return view('livewire.result-page');
    }
}
