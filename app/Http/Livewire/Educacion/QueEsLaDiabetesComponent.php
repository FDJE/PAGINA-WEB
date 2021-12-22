<?php

namespace App\Http\Livewire\Educacion;

use App\Models\Educations;
use Livewire\Component;
use Livewire\WithPagination;

class QueEsLaDiabetesComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 0], ['type', 0], ['status', 1]])->get();
        $symptoms = Educations::where([['category', 0], ['type', 1], ['status', 1]])->get();
        $consejos = Educations::where([['category', 0], ['type', 2], ['status', 1]])->get();
        return view('livewire.educacion.que-es-la-diabetes-component',['educations'=>$educations, 'symptoms' => $symptoms, 'consejos' => $consejos])->layout('layouts.base');
    }
}
