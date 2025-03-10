<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //especificamos la representacion de json
        return [
            "id"=>(string)$this->id,
            "type" => "Alumno",
            "attributes" => [
                "id"=>$this->id,
                "nombre"=>$this->nombre,
                "apellido"=>$this->apellido,
                "dni"=>$this->dni,
                "correo"=>$this->correo
            ]

        ];
    }
}
