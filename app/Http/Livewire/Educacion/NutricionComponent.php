<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class NutricionComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 6], ['type', 0], ['status', 1]])->get();
        return view('livewire.educacion.nutricion-component',['educations'=>$educations])->layout('layouts.base');
    }
}
