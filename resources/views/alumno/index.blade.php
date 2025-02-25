<x-layouts.layout>
    <table>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Email</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->email}}</td>

            </tr>
        @endforeach
    </table>












</x-layouts.layout>
