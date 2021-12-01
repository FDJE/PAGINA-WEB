<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class AdminMensajesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.admin.admin-mensajes-component')->layout('layouts.base');
    }
}
