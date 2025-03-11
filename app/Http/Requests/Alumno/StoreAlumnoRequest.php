<?php

namespace App\Http\Requests\Alumno;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //data.attributes porque los estoy recogiendo de un json, no formulario
            'nombre' => 'required|string|min:3|max:10',
            'apellido' => 'required|string|min:3|max:10',
            'dni' => ["required", "string", "size:10", "unique:alumnos,dni", "regex:/^[0-9]{8}\-[a-zA-Z]$/"], //verifica que no haya un dni igual en la tabla alumnos
            'correo' => 'required|email|unique:alumnos,correo',

        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

}
