<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class InsulinasComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 5], ['type', 0], ['status', 1]])->get();
        $symptoms = Educations::where([['category', 5], ['type', 1], ['status', 1]])->get();
        $symptoms2 = Educations::where([['category', 5], ['type', 3], ['status', 1]])->get();
        return view('livewire.educacion.insulinas-component',['educations'=>$educations,'symptoms' => $symptoms,'symptoms2' => $symptoms2])->layout('layouts.base');
    }
}
