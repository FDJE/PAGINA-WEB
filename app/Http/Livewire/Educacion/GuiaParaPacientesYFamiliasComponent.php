<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class GuiaParaPacientesYFamiliasComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 1], ['type', 0], ['status', 1]])->get();
        $consejos = Educations::where([['category', 1], ['type', 2], ['status', 1]])->get();
        return view('livewire.educacion.guia-para-pacientes-y-familias-component', ['educations' => $educations, 'consejos' => $consejos])->layout('layouts.base');
    }
}
