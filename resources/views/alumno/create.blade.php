<x-layouts.layout title="Crear alumno">

    <div class="flex flex-col justify-center items-center ">
    <form class="flex flex-col justify-center items-center bg-pink-300 py-5 my-10" method="post" action="{{route('alumno.store')}}">
        <h1 >Crear nuevo alumno</h1>
        @csrf

        <div class="flex flex-row m-4 items-center justify-center ">

    <label class=" flex items-center gap-2 mx-4">
        Nombre
        <input type="text" class="grow" value="{{('nombre')}}" placeholder="Nombre" name="nombre" />
        @error("nombre")
        <div class="text-red-700">{{$message}}</div>
        @enderror
    </label>


    <label class=" flex items-center gap-2">
        Apellido
        <input type="text" class="grow" value="{{old('apellido')}}" placeholder="Apellido" name="apellido"/>
        @error("apellido")
        <div class="text-red-700">{{$message}}</div>
        @enderror
    </label>

        </div>

        <div class="flex flex-row m-4 items-center justify-center">
    <label class=" flex items-center gap-2 mx-4">
        DNI
        <input type="text" class="grow" value="{{old('dni')}}" placeholder="DNI" name="dni"/>
        @error("dni")
        <div class="text-red-700">{{$message}}</div>
        @enderror
    </label>


    <label class=" flex items-center gap-2">
        Correo
        <input type="text" class="grow" value="{{old('correo')}}" placeholder="Email" name="correo"/>
        @error("correo")
        <div class="text-red-700">{{$message}}</div>
        @enderror
    </label>
    </div>
        <input type="submit" value="Enviar" class="btn bg-secondary text-white">
    </form>
    </div>

</x-layouts.layout>
