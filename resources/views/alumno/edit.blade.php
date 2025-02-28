<x-layouts.layout title="Crear alumno">
    <div class="flex flex-col justify-center items-center ">
        <form onsubmit="event.preventDefault()" id="formulario{{$alumno->id}}" class="flex flex-col justify-center items-center bg-pink-300 py-5 my-10" method="post" action="{{route('alumno.update', $alumno->id)}}">
            <h1 >Crear nuevo alumno</h1>
            @method("PUT")
            @csrf

            <div class="flex flex-row m-4 items-center justify-center ">

                <label class=" flex items-center gap-2 mx-4">
                    Nombre
                    <input value="{{$alumno->nombre}}" type="text" class="grow" placeholder="Nombre" name="nombre" />
                </label>

                <label class=" flex items-center gap-2">
                    Apellido
                    <input value="{{$alumno->apellido}}"  type="text" class="grow" placeholder="Apellido" name="apellido"/>
                </label>

            </div>

            <div class="flex flex-row m-4 items-center justify-center">
                <label class=" flex items-center gap-2 mx-4">
                    DNI
                    <input value="{{$alumno->dni}}" type="text" class="grow" placeholder="DNI" name="dni"/>
                </label>
                <label class=" flex items-center gap-2">
                    Correo
                    <input value="{{$alumno->correo}}" type="text" class="grow" placeholder="Email" name="correo"/>
                </label>
            </div>

            <div class="flex flex-row">
            <input type="submit" onclick="confirmarUpdate({{$alumno->id}})" value="Actualizar alumno" class="btn bg-green-700 text-white">
            <input type="submit" value="Cancelar" class="btn bg-red-700 text-white">
            </div>

        </form>
    </div>

    <script>
        function confirmarUpdate(id){
            swal({
                title:"Confirmar cambios",
                text:"Esta accióln definitiva no es recuperable",
                icon: "warning",
                buttons:true
            }).then((ok) => {
                    if (ok) {
                        let formulario = document.getElementById("formulario" + id)
                        formulario.submit();
                    }
                }
            )
        }
    </script>

</x-layouts.layout>
