<?php

namespace App\Http\Livewire\Admin;

use App\Models\Educations;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditEducacionComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $category;
    public $status;
    public $type;
    public $description;
    public $image;
    public $image_position;
    public $newimage;
    public $education_id;

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

    public function mount($eventos_slug)
    {
        $education = Educations::where('id', $eventos_slug)->first();

        $this->title = $education->title;
        $this->category = $education->category;
        $this->status = $education->status;
        $this->image_position = $education->image_position;
        $this->type = $education->type;
        $this->description = $education->description;

        $this->image = $education->image;
        $this->education_id = $education->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'category' => 'required',
            'type' => 'required',
            'image_position' => 'required',
            'description' => 'required',
        ]);
        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required',
            ]);
        }
    }

    public function updateEvent()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'type' => 'required',
            'image_position' => 'required',
            'description' => 'required',
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required',
            ]);
        }

        $education = Educations::find($this->education_id);

        $education->title = $this->title;
        $education->category = $this->category;
        $education->type = $this->type;
        $education->status = $this->status;
        $education->image_position = $this->image_position;
        $education->description = $this->description;

        if ($this->newimage) {
            unlink('assets/images/fundacionImagenes/educacion' . '/' . $education->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('fundacionImagenes/educacion', $imageName);
            $education->image = $imageName;
        }

        $education->save();
        session()->flash('message', 'El Evento ha sido actualizado!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-educacion-component')->layout('layouts.base');
    }
}
