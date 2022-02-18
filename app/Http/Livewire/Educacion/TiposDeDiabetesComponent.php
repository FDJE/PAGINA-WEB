<?php

namespace App\Http\Livewire\Educacion;
use App\Models\Educations;
use Livewire\Component;

class TiposDeDiabetesComponent extends Component
{
    public function render()
    {
        $educations = Educations::where([['category', 2], ['type', 0], ['status', 1]])->get();
        return view('livewire.educacion.tipos-de-diabetes-component', [ 'educations' => $educations ])->layout('layouts.base');
    }
}
