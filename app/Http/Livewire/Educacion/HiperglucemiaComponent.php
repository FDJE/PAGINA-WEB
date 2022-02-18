<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class HiperglucemiaComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 0], ['type', 0], ['status', 1]])->get();
        $symptoms = Educations::where([['category', 4], ['type', 1], ['status', 1]])->get();

        return view('livewire.educacion.hiperglucemia-component',['symptoms' => $symptoms,'educations'=>$educations])->layout('layouts.base');
    }
}
