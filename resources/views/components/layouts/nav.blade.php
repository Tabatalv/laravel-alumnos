<nav class="h-10v bg-nav flex flex-row justify-center items-center px-4">
    <button class="btn btn-sm  btn-secondary mx-2">About</button>
    <button class="btn btn-sm btn-secondary mx-2">Contact</button>
    <button class="btn btn-sm btn-secondary mx-2">Noticias</button>

    @auth
        <a href="{{route("alumnos")}}" class="btn btn-sm btn-secondary mx-2">Alumnos</a>
    @endauth
</nav>
