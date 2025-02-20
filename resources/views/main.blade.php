<x-layouts.layout title="Main">
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url({{asset('Images/flor.jpg')}});">
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

            <div class="flex items-center justify-center card glass w-96  max-h-full bg-base-100 shadow-xl overflow-hidden">
                <figure>
                    <img
                        src="{{asset('Images/florGlass.jpg')}}"
                        alt="car!" />
                </figure>
                <div class="card-body flex flex-col justify-between h-full">
                    <h2 class="card-title">Life hack</h2>
                    <p>How to park your car at your garage?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Learn now!</button>
                    </div>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.layout>
