<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Collection;
use App\Models\Educations;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddEducacionComponent extends Component
{
    use WithFileUploads;
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

    public $title;
    public $image_position;
    public $status;
    public $category;
    public $type;
    public $description;
    public $image;

    public function mount()
    {
        $this->status = 0;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'category' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image_position' => 'required',
            //'image' => 'mimes:jpeg,png,jpg',
        ]);
    }

    public function addEvent()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image_position' => 'required',
            //'image' => 'mimes:jpeg,png,jpg',
        ]);
        $education = new Educations();
        $education->title =$this->title;
        $education->category =$this->category;
        $education->type =$this->type;
        $education->status= $this->status;
        $education->image_position =$this->image_position;
        $education->description =$this->description;

        if ($this->image) {
            $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
            $this->image->storeAs('fundacionImagenes/educacion',$imageName);
            $education->image =$imageName;
        }

        $education->save();
        session()->flash('message','Evento creado con éxito!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-educacion-component')->layout('layouts.base');
    }
}
