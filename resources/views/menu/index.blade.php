@extends('layouts.app')

@section('title', 'Menu | Restaurant Menu')

@section('content')

<section class="bg-stone-100 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <h1 class="text-5xl font-bold text-gray-900">
                Our Menu
            </h1>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Discover our most popular dishes prepared with fresh ingredients
                and served with love.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($menu as $m)
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition hover:-translate-y-2 hover:shadow-2xl">

                <img
                    src="{{ $m['image'] }}"
                    alt="Food"
                    class="h-64 w-full object-cover">

                <div class="p-6">

                    <div class="mb-3 flex items-center justify-between">
                        <h2 class="text-2xl font-bold">
                            {{ $m['name'] }}
                        </h2>

                        <span class="rounded-full bg-yellow-500 px-3 py-1 text-sm font-semibold text-white">
                            ${{ $m['price'] }}
                        </span>
                    </div>

                    <p class="mb-6 text-gray-600">
                        {{ $m['description'] }}
                    </p>

                    <a href="{{ route('menu.show', $m['id']) }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-black px-5 py-3 font-semibold text-white transition hover:bg-yellow-500 hover:text-black">

                        View Details

                        <i data-lucide="arrow-right"></i>

                    </a>

                </div>

            </div>
            @endforeach


        </div>

    </div>

</section>

@endsection