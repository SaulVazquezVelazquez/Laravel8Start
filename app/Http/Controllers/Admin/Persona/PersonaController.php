<?php

namespace App\Http\Controllers\Admin\Persona;

use App\Http\Controllers\Controller;
use App\Models\Persona;
// use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.persona.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $persona = Persona::create($request->all());

        return redirect()->route('admin.persona.index',$persona)->with('personainsert', 'Persona Save Success');
    }

    public function show($id)
    {
        //
    }

    public function edit(Persona $persona)
    {
        return view('admin.persona.edit',compact('persona'));
    }


    public function update(Request $request, Persona $persona)
    {
        // $persona = Persona::updated($request->all());
        $persona->update($request->all());

        return redirect()->route("admin.persona.edit",$persona)->with("personaupdate","Persona Updating success");
        //personaupdate
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route("admin.persona.index")->with('personadelete', 'Delete Persona Success');
        // return redirect()->route("admin.persona.index");
    }
}
