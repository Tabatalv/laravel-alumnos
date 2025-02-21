<nav class="hidden md:flex h-10v bg-nav flex flex-row justify-between items-center px-4">
    <div>
        <h3 class="text-white font-bold">Gestión Alumnos</h3>
    </div>
    <div>
    <button class="btn btn-sm  btn-secondary mx-2">About</button>
    <button class="btn btn-sm btn-secondary mx-2">Contact</button>
    <button class="btn btn-sm btn-secondary mx-2">Noticias</button>

    @auth
        <a href="{{route("alumnos")}}" class="btn btn-sm btn-secondary mx-2">Alumnos</a>
    @endauth
    </div>
</nav>
<nav class="md:hidden h-10v bg-nav flex flex-col justify-around items-center">
    <div>
        <h3 class="text-white font-bold">Gestión Alumnos</h3>
    </div>
    <div>
        <button class="btn btn-sm  btn-secondary mx-2">About</button>
        <button class="btn btn-sm btn-secondary mx-2">Contact</button>
        <button class="btn btn-sm btn-secondary mx-2">Noticias</button>

        @auth
            <a href="{{route("alumnos")}}" class="btn btn-sm btn-secondary mx-2">Alumnos</a>
        @endauth
    </div>
</nav>
