<header class="hidden h-15v bg-header
md:flex flex-row justify-between items-center
p-3"><img class="m-4 h-16 max h-full bg-white" src="{{asset('Images/logotipo.png')}}" alt="logo">
    <h1 class=" text-3xl text-white">GESTION CENTRO</h1>
    <div>
        @guest
            <form action="">
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

    </div></header>
<header class="md:hidden h-15v bg-header
flex flex-col justify-between items-center
p-3">
    <img class="m-4 h-16 max h-full bg-white" src="{{asset('Images/logotipo.png')}}" alt="logo">
    <h1 class=" text-3xl text-white">GESTION CENTRO</h1>
    <div>
        @guest
            <form action="">
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

</header>
