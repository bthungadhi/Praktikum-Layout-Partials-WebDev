@extends('layouts.app')
@section('title', 'Blog')

@section('content')

    <section class="wrap max-w-4xl py-20">
        <h1 class="page-title">Blog</h1>
        <p class="lead mt-4">Catatan seputar programming dan perjalanan belajar saya.</p>

        <div class="mt-12 divide-y divide-neutral-200 border-y border-neutral-200">
            <article class="py-8">
                <p class="text-sm text-neutral-500"><span class="font-medium text-purple-700">Python</span> ·
                    awal masuk Universitas</p>
                <h2 class="mt-2 text-xl font-semibold text-neutral-900">Mengenal Dasar-Dasar Python</h2>
                <p class="mt-2 text-neutral-600">Python punya sintaks yang sederhana dan mudah dibaca, jadi
                    cocok untuk pemula. Di sini saya merangkum konsep dasar yang pertama kali saya pelajari.</p>
            </article>

            <article class="py-8">
                <p class="text-sm text-neutral-500"><span class="font-medium text-purple-700">Java</span> ·
                    awal masuk Universitas</p>
                <h2 class="mt-2 text-xl font-semibold text-neutral-900">Belajar Konsep OOP dengan Java</h2>
                <p class="mt-2 text-neutral-600">Java membantu saya memahami class, object, dan pewarisan secara
                    terstruktur. Saya mencatat bagian yang awalnya membingungkan beserta cara memahaminya.</p>
            </article>

            <article class="py-8">
                <p class="text-sm text-neutral-500"><span class="font-medium text-purple-700">HTML</span> ·
                    awal masuk Universitas</p>
                <h2 class="mt-2 text-xl font-semibold text-neutral-900">HTML Semantik untuk Halaman yang Rapi
                </h2>
                <p class="mt-2 text-neutral-600">Tag seperti header, main, dan section membuat struktur halaman
                    lebih jelas. Saya membahas kenapa HTML semantik penting untuk keterbacaan dan aksesibilitas.
                </p>
            </article>
        </div>
    </section>
    </section>


@endsection
