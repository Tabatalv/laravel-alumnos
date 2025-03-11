<?php

namespace App\Http\Controllers;

use App\Http\Requests\Alumno\StoreAlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        //carpeta alumno con pagina index
        return view("alumno.index", ["alumnos" => $alumnos]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //validar
        //recoger los datos
        //guardarlo en la bd
        $datos = $request->input();
        $alumno = new Alumno($datos);
        $alumno->save();
        //creo una variable session status con el valor se ha guardado, luego hago de nuevo una req al servidor para que redirija
        session()->flash("status", "Se ha creado el alumno $alumno->nombre");
        return redirect(route("alumno.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //inpput = $nombre = $_POST["nombre"], $apellido ....
        $alumno->update($request->input());
        session()->flash("status", "Se ha actualizado $alumno->nombre");
        return redirect(route("alumno.index"));
    }

    public function edit(Alumno $alumno)
    {
        //
        return view("alumno.edit", ["alumno" => $alumno]);

    }
    public function create()
    {
        //
        return view("alumno.create");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
        $alumno->delete();
        session()->flash("status", "Se ha borrado el alumno $alumno->nombre");
        return redirect(route("alumno.index"));
    }
}
