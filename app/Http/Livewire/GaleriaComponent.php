<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GaleriaComponent extends Component
{
    public function render()
    {
        return view('livewire.galeria-component')->layout('layouts.base');
    }
}
