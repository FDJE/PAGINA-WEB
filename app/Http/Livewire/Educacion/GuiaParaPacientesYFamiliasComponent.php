<?php

namespace App\Http\Livewire\Educacion;

use Livewire\Component;

class GuiaParaPacientesYFamiliasComponent extends Component
{
    public function render()
    {
        return view('livewire.educacion.guia-para-pacientes-y-familias-component')->layout('layouts.base');
    }
}
