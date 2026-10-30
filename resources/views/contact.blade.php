@extends('layouts.app')
@section('title', 'About')

@section('content')

    <section class="wrap max-w-4xl py-20">
        <div>
            <h1 class="page-title">Hubungi saya</h1>
            <p class="lead mt-4 max-w-md">Punya pertanyaan, tawaran kolaborasi, atau sekadar ingin menyapa?
                Kirim pesan.</p>
            <ul class="mt-8 space-y-2 text-neutral-700">
                <li><a href="mailto:email@example.com" class="hover:text-purple-700">bthungadhi@student.ciputra.ac.id</a></li>
                <li><a href="https://github.com/username" class="hover:text-purple-700">github.com/bthungadhi</a>
                </li>
            </ul>
        </div>

        <form action="mailto:email@example.com" method="GET" enctype="text/plain" class="space-y-5">
            <div>
                <label for="name" class="field-label">Nama</label>
                <input id="name" name="name" type="text" required class="field">
            </div>
            <div>
                <label for="email" class="field-label">Email</label>
                <input id="email" name="email" type="email" required class="field">
            </div>
            <div>
                <label for="message" class="field-label">Pesan</label>
                <textarea id="message" name="message" rows="5" required class="field"></textarea>
            </div>
            <button type="submit" class="btn-dark">Kirim pesan</button>
        </form>
    </section>

@endsection
