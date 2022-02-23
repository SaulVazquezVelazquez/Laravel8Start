<?php

namespace App\Http\Livewire\LivePersona;

use App\Models\Persona;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class TablePersona extends Component
{
    public function render()
    {
        // $personas = DB::select('SELECT * FROM personas');
        $personas = Persona::all();

        return view('livewire.live-persona.table-persona',compact('personas'));
    }
}
