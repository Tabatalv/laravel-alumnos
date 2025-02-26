<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //validar
        //recoger los datos
        //guardarlo en la bd
        $datos = $request->input();
        $alumno = new Alumno($datos);
        $alumno->save();
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
    public function update(Request $request, string $id)
    {
        //
        return view("alumno.edit");
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
        return redirect(route("alumno.index"));
    }
}
