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
        // $personas = DB::select('SELECT * FROM personas');
        // $personas = Persona::all();

        // return view('admin.persona.index',compact('personas'));
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

        return redirect()->route('admin.persona.index',compact('persona'))->with('personainsert', 'Persona Save Success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Persona $persona)
    {
        
        $persona->delete();
        return redirect()->route("admin.persona.index")->with('personadelete', 'Delete Persona Success');
    }
}
