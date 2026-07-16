@extends('layouts.app')

@section('title', 'Home | Restaurant Menu')

@section('content')

<!-- Hero Section -->
<section class="relative h-[650px] overflow-hidden">

    @foreach ($slides as $index => $slide)
    <div
        class="hero-slide absolute inset-0 transition-opacity duration-700 {{ $index == 0 ? 'opacity-100' : 'opacity-0' }}">

        <img
            src="{{ $slide['image'] }}"
            class="absolute inset-0 w-full h-full object-cover"
            alt="{{ $slide['title'] }}">

        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 flex h-full items-center justify-center">

            <div class="max-w-3xl px-6 text-center text-white">

                <span
                    class="mb-5 inline-block rounded-full bg-yellow-500 px-5 py-2 font-semibold text-black">
                    Welcome to Restaurant
                </span>

                <h1 class="mb-6 text-6xl font-black">
                    {{ $slide['title'] }}
                </h1>

                <p class="mb-10 text-xl text-gray-200">
                    {{ $slide['description'] }}
                </p>

                <a
                    href="{{ $slide['url'] }}"
                    class="rounded-lg bg-yellow-500 px-8 py-4 font-bold text-black transition hover:bg-yellow-600">
                    {{ $slide['button'] }}
                </a>

            </div>

        </div>

    </div>
    @endforeach

    <!-- Dots -->
    <div class="absolute bottom-8 left-1/2 z-20 flex -translate-x-1/2 gap-3">
        @foreach ($slides as $index => $slide)
        <button
            class="hero-dot h-3 w-3 rounded-full bg-white/60 transition"
            data-index="{{ $index }}">
        </button>
        @endforeach
    </div>

</section>

<!-- Features -->
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold mb-4">
                Why Choose Us
            </h2>

            <p class="text-gray-500 max-w-2xl mx-auto">
                We are passionate about creating unforgettable dining
                experiences through quality food and outstanding service.
            </p>

        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            @if($features)
            @foreach ($features as $feature)
            <div class="bg-stone-50 rounded-xl p-8 shadow hover:shadow-xl transition">
                <i data-lucide="{{ $feature['icon'] }}"
                    class="w-12 h-12 text-yellow-500 mb-5"></i>

                <h3 class="text-2xl font-semibold mb-3">
                    {{ $feature['title'] }}
                </h3>

                <p class="text-gray-600">
                    {{ $feature['description'] }}
                </p>
            </div>
            @endforeach
            @else
            <div class="col-span-full flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-gray-300 bg-stone-50 py-16">
                <i data-lucide="circle-alert" class="w-16 h-16 text-yellow-500 mb-4"></i>

                <h2 class="text-3xl font-bold text-gray-800 mb-2">
                    No Features Found
                </h2>

                <p class="text-gray-500 text-center max-w-md">
                    There are no restaurant features available at the moment.
                    Please check back later.
                </p>
            </div>
            @endif
        </div>

    </div>

</section>

@endsection