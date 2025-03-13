<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\StoreAlumnoRequest;
use App\Http\Resources\AlumnoCollection;
use App\Http\Resources\AlumnoResource;
use App\Models\Alumno;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

/**
 * @OA\Info (
 *     title="API para consultar alumnos de mi centro",
 *      version="2.0.0",
 *      description="Esta api permite interactuar con los alumnos de bd del instituto",
 *      @OA\Contact(
 *          name="Tabata",
 *          email="tabata.lopez11@gmail.com",
 *      ),
 *      @OA\License(
 *          name="MIT",
 *          url="https://opensource.org/license/mit",
 *      )
 * )
/**
 *     @OA\Schema(
 *         schema="Alumno",
 *         type="object",
 *         required={"id", "name", "email"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Juan Pérez"),
 *         @OA\Property(property="email", type="string", example="juan@example.com")
 *     )

 */


class AlumnoApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/alumnos",
     *      operationId="GetAlumnos",
     *      tags={"Alumnos"},
     *      summary="Obtener todos los alumnos",
     *      @OA\Response(
     *          response=200,
     *          description="Éxito",
     *          @OA\MediaType(
     *              mediaType="application/vnd.api+json",
     *              @OA\Schema(
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/Alumno")

     *              )
     *          )
     *      )
     * )
     */

    public function index(Request $request)
    {
        return new AlumnoCollection(Alumno::all());


    }


    /**
     * @OA\Post(
     *      path="/api/alumnos",
     *      operationId="createAlumno",
     *      tags={"Alumnos"},
     *      summary="Crear un nuevo alumno",
     *      description="Stores a new user in the database",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              required={"name","email","password"},
     *              @OA\Property(property="name", type="string", example="John Doe"),
     *              @OA\Property(property="email", type="string", example="johndoe@example.com"),
     *              @OA\Property(property="password", type="string", example="123456")
     *          )
     *      ),
     *      @OA\Response(response=201, description="User created successfully")
     * )
     */

    public function store(StoreAlumnoRequest $request)
    {
        $datos = $request->input("data.attributes");
        $alumno = new Alumno($datos);
        $alumno->save();
        return new AlumnoResource($alumno);
        //
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

    /**
     * @OA\Put(
     *      path="/api/alumnos",
     *      operationId="updateAlumno",
     *      tags={"Alumnos"},
     *      summary="Actualizar datos de alumno",
     *      description="Updates user data in the database",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              required={"name","email","password"},
     *              @OA\Property(property="name", type="string", example="John Doe"),
     *              @OA\Property(property="email", type="string", example="johndoe@example.com"),
     *              @OA\Property(property="password", type="string", example="123456")
     *          )
     *      ),
     *      @OA\Response(response=200, description="User updated successfully")
     * )
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */

    /**
     * @OA\Delete(
     *      path="/api/alumnos",
     *      operationId="deleteAlumno",
     *      tags={"Alumnos"},
     *      summary="Eliminar un alumno",
     *      description="Deletes a user in the database",
     *
     *      @OA\Response(response=200, description="User deleted successfully")
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
