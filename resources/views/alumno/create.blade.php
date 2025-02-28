<x-layouts.layout title="Crear alumno">
    <div class="flex flex-col justify-center items-center ">
    <form class="flex flex-col justify-center items-center bg-pink-300 py-5 my-10" method="post" action="{{route('alumno.store')}}">
        <h1 >Crear nuevo alumno</h1>
        @csrf

        <div class="flex flex-row m-4 items-center justify-center ">

    <label class=" flex items-center gap-2 mx-4">
        Nombre
        <input type="text" class="grow" placeholder="Nombre" name="nombre" />
    </label>

    <label class=" flex items-center gap-2">
        Apellido
        <input type="text" class="grow" placeholder="Apellido" name="apellido"/>
    </label>

        </div>

        <div class="flex flex-row m-4 items-center justify-center">
    <label class=" flex items-center gap-2 mx-4">
        DNI
        <input type="text" class="grow" placeholder="DNI" name="dni"/>
    </label>
    <label class=" flex items-center gap-2">
        Correo
        <input type="text" class="grow" placeholder="Email" name="correo"/>
    </label>
    </div>
        <input type="submit" value="Enviar" class="btn bg-secondary text-white">
    </form>
    </div>

</x-layouts.layout>
