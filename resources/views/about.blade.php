@extends('layouts.app')
@section('title', 'About')

@section('content')

    <section class="wrap py-20 grid gap-12 md:grid-cols-3">
        <div class="md:col-span-2">
            <h1 class="page-title">Tentang saya</h1>
            <p class="lead mt-6 max-w-2xl">Nama : Bryan Thungadhi Jaya</p>
            <p class="lead mt-6 max-w-2xl">Umur : 19 tahun</p>
            <p class="lead mt-6 max-w-2xl">Program Studi : Informatika</p>
            <p class="lead mt-6 max-w-2xl">Universitas : Universitas Ciputra Makassar</p>
            <p class="lead mt-6 max-w-2xl">Hobi : Bermain Game, Makan, Tidur</p>
            <p class="lead mt-6 max-w-2xl">Cita-cita : Membuat huruf baru</p>
            <p class="lead mt-6 max-w-2xl">Motivasi : Tetap hidup</p>
        </div>
        <div class="img-placeholder aspect-square rounded-lg"><img src="/img/foto-profil.png" alt="Foto Profil">
        </div>
    </section>

    <section class="band">
        <div class="wrap">
            <h2 class="section-title">Skills</h2>
            <ul class="mt-6 flex flex-wrap gap-3">
                <li class="tag">HTML</li>
                <li class="tag">Tailwind CSS</li>
                <li class="tag">Laravel</li>
                <li class="tag">PHP</li>
                <li class="tag">JavaScript</li>
                <li class="tag">Git</li>
            </ul>
        </div>
    </section>

    <section class="wrap py-16">
        <h2 class="section-title">Perjalanan belajar</h2>
        <ol class="mt-8 max-w-2xl space-y-8 border-l-2 border-purple-700 pl-6">
            <li>
                <p class="text-sm font-semibold text-purple-700">[Tahun 2025]</p>
                <p class="mt-1 text-neutral-700">[Awal mulai belajar coding]</p>
            </li>
            <li>
            <li>
                <p class="text-sm font-semibold text-purple-700">Sekarang</p>
                <p class="mt-1 text-neutral-700">[Fokus belajar saat ini yaitu pengembangan skill]</p>
            </li>
        </ol>
    </section>


@endsection
