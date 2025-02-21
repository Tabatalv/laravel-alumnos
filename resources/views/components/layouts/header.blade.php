<header class="hidden h-15v bg-header
md:flex flex-row justify-between items-center
p-3">
    <img class="m-4 h-16 max-h-full bg-white" src="{{asset('Images/logotipo.png')}}" alt="logo">
    <div>
        <input type="checkbox" id="menu-toggler" class="peer hidden">
        <br><br>
        <label for="menu-toggler" class="text-3xl">
            &#9778
        </label>

        <div class="hidden absolute right-0 p-2 peer-checked:flex rounded-xl bg-white">
        @guest
            <form action="" class="flex flex-col">
                <a href="{{route("login")}}" class="btn btn-secondary btn-sm">Login</a>
                <a href="{{route("register")}}" class="btn btn-sm mx-2 glass">Register</a>
            </form>
        @endguest
        @auth
            <div class="flex flex-row items-center text-white">
                Bienvenid@,
            {{auth()->user()->name}} !

            <form action="{{route("logout")}}" method="post">
                @csrf
                <input type="submit" value="Logout" class="btn btn-sm mx-2 glass text-white">
            </form>
            </div>
        @endauth
    </div>
    </div></header>
<header class="md:hidden h-15v bg-header
flex flex-row justify-between
p-3">
    <img class="m-4 h-16 min-h-10 bg-white" src="{{asset('Images/logotipo.png')}}" alt="logo">

    <div>
        <input type="checkbox" id="menu-toggler" class="peer hidden">
        <br><br>
        <label for="menu-toggler" class="text-3xl">
            &#9778
        </label>

        <div class="hidden absolute right-0 p-4 max-h-full peer-checked:flex rounded-xl bg-white">
        @guest
            <form action="" class="flex flex-col">
                <a href="{{route("login")}}" class="btn btn-secondary btn-sm">Login</a>
                <a href="{{route("register")}}" class="btn btn-sm mx-2 glass">Register</a>
            </form>
        @endguest
        @auth

            {{auth()->user()->name}}

            <form action="{{route("logout")}}" method="post">
                @csrf
                <input type="submit" value="Logout" class="btn btn-sm mx-2 glass">
            </form>

        @endauth

    </div>
    </div>
</header>
