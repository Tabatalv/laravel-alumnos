
<x-layouts.layout>
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>
                    <button class="btn btn-secondary">Get Started</button>
                </div>
            </div>
        </div>
    @endguest
    @auth
        <div class="image-full card bg-base-100 w-96 shadow-xl">
            <figure class="px-10 pt-10">
                <img
                    src="{{asset('Images/fondo.avif')}}"
                    alt="Alumnos"
                    class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.layout>
