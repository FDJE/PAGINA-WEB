<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class HipoglucemiaComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 0], ['type', 0], ['status', 1]])->get();
        $symptoms = Educations::where([['category', 3], ['type', 1], ['status', 1]])->get();
        return view('livewire.educacion.hipoglucemia-component',['symptoms' => $symptoms,'educations'=>$educations])->layout('layouts.base');
    }
}
