<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ResultPage extends Component
{
    public function mount(Request $request){

    }
    public function render()
    {
        return view('livewire.result-page');
    }
}
