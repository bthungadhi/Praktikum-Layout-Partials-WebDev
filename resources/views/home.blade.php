@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <section class="wrap py-20 md:py-32">
        <p class="text-purple-700 font-semibold">Halo, saya</p>
        <h1 class="mt-2 text-5xl md:text-7xl font-bold tracking-tight text-neutral-900">Bryan Thungadhi Jaya</h1>
        <p class="lead mt-6 max-w-xl">Saya sedang menjalankan program studi saya di UC Makassar</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="#projects" class="btn-dark">View My Work</a>
            <a href="/about" class="btn-light">Tentang saya</a>
        </div>
    </section>

    <section id="projects" class="band py-20">
        <div class="wrap">
            <h2 class="section-title">Proyek unggulan</h2>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="card">
                    <img src="{{ asset('img/foto1.jpeg') }}" alt="Foto Python" class="aspect-video w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-neutral-900">Python</h3>
                        <p class="mt-2 text-sm text-neutral-600">Ilmu komputer</p>
                        <p class="mt-4 text-xs font-medium text-purple-700">Python</p>
                    </div>
                </article>
                <article class="card">
                    <img src="{{ asset('img/foto1.jpeg') }}" alt="Foto HTML" class="aspect-video w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-neutral-900">HTML</h3>
                        <p class="mt-2 text-sm text-neutral-600">Dasar struktur halaman web</p>
                        <p class="mt-4 text-xs font-medium text-purple-700">HTML, CSS</p>
                    </div>
                </article>
                <article class="card">
                    <img src="{{ asset('img/foto1.jpeg') }}" alt="Foto PHP" class="aspect-video w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-neutral-900">PHP</h3>
                        <p class="mt-2 text-sm text-neutral-600">Pendalaman PHP</p>
                        <p class="mt-4 text-xs font-medium text-purple-700">PHP, MySQL</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="wrap py-20 flex flex-wrap items-center justify-between gap-6">
        <div>
            <h2 class="section-title">Punya ide atau proyek?</h2>
            <p class="lead mt-2">Ceritakan kepada saya, kita bahas bersama.</p>
        </div>
        <a href="/contact" class="btn-purple">Hubungi saya</a>
    </section>

@endsection