<?php

namespace App\Http\Livewire\Admin;

use App\Models\Educations;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEducacionComponent extends Component
{
    use WithPagination;

    public $type;
    public $category;

    public $options = [
        0 => '¿Qué es la diabetes?',
        1 => 'Guía para pacientes y familias',
        2 => 'Tipos de diabetes',
        3 => 'Hipoglucemia',
        4 => 'Hiperglucemia',
        5 => 'Insulinas',
        6 => 'Nutrición',
        7 => 'Actividades físicas y deporte',
        8 => 'Psicología',
    ];

    public $types = [
        0 => 'Detalle',
        1 => 'Sintomas y signos',
        2 => 'Consejos',
        3 => 'Sintomas y signos2'
    ];

    private $educations = [];

    public function mount()
    {
        $this->category = 0;
        $this->type = 0;
    }



    public function deleteEducation($id)
    {
        $education = Education::find($id);
        /* if ($education->image) 
        {
            unlink('assets/images//home/eventos'.'/'.$education->image);
        } */

        //$education->delete();
        session()->flash('message','El evento ha sido borrado exitosamente!');
    }
    
    public function render()
    {
        $this->educations = Educations::where([['category', $this->category], ['type', $this->type]])->paginate(4);
        return view('livewire.admin.admin-educacion-component', ['educations' => $this->educations])->layout('layouts.base');
    }
}
