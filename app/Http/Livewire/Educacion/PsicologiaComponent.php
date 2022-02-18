<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class PsicologiaComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 8], ['type', 0], ['status', 1]])->get();
        return view('livewire.educacion.psicologia-component',['educations'=>$educations])->layout('layouts.base');
    }
}
