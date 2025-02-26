<x-layouts.layout>
    <div class="flex flex-col justify-center items-center">
    <form class="flex flex-col justify-center items-center" method="post" action="{{route('alumno.store')}}">
        <legend>Crear nuevo alumno</legend>
        @csrf

        <div class="flex flex-row m-4 ">

    <label class=" flex items-center gap-2 ">
        Nombre
        <input type="text" class="grow" placeholder="Nombre" name="nombre" />
    </label>

    <label class=" flex items-center gap-2">
        Apellido
        <input type="text" class="grow" placeholder="Apellido" name="apellido"/>
    </label>

        </div>

        <div class="flex flex-row m-4">
    <label class=" flex items-center gap-2">
        DNI
        <input type="text" class="grow" placeholder="DNI" name="dni"/>
    </label>
    <label class=" flex items-center gap-2">
        Correo
        <input type="text" class="grow" placeholder="Email" name="correo"/>
    </label>
    </div>
        <input type="submit" value="Enviar">
    </form>
    </div>

</x-layouts.layout>
