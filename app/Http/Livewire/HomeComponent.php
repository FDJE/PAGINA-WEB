<?php

namespace App\Http\Livewire;

use App\Models\Aliance;
use App\Models\Event;
use App\Models\Notice;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Slider;
use Livewire\Component;


class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Slider::where('status',1)->get();
        $events = Event::orderBy('created_at','DESC')->where('status',1)->get();
        $notices = Notice::orderBy('created_at','DESC')->where('status',1)->get();
        $projects = Project::orderBy('created_at','DESC')->where('status',1)->get();
        $aliances = Aliance::orderBy('created_at','DESC')->where('status',1)->get();
        $setting = Setting::find(1);

        return view('livewire.home-component',[
            'sliders'=> $sliders,
            'events'=> $events,
            'notices'=> $notices,
            'projects'=> $projects,
            'aliances'=> $aliances,
            'setting'=>$setting
            ])->layout('layouts.base');
    }
}
