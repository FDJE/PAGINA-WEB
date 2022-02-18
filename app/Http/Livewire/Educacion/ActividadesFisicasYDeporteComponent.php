<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class ActividadesFisicasYDeporteComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 7], ['type', 0], ['status', 1]])->get();
        return view('livewire.educacion.actividades-fisicas-y-deporte-component',['educations' => $educations])->layout('layouts.base');
    }
}
