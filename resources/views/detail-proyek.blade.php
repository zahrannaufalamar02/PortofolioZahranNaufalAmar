@extends('layouts.app')

@section('title', 'Detail Proyek')

@section('content')

<a href="{{ route('proyek') }}" class="back">
    &larr; Kembali ke Daftar Proyek
</a>

<section class="hero" style="margin-top: 24px;">

    <span class="eyebrow">Detail Portofolio</span>

    <h1>{{ $proyek['nama'] }}</h1>

    <p>
        {{ $proyek['deskripsi'] }}
    </p>

    <div style="margin-top: 20px;">
        <span class="tag"
              style="background: #1e293b; color: #93c5fd;">
            {{ $proyek['kategori'] }}
        </span>
    </div>

</section>

<div class="grid"
     style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">

    <section class="card">
        <span class="project-number">01 / INFORMASI</span>

        <h2>Ringkasan Proyek</h2>

        <p>
            {{ $proyek['deskripsi'] }}
        </p>
    </section>

    <section class="card">
        <span class="project-number">02 / TEKNOLOGI</span>

        <h2>Teknologi yang Digunakan</h2>

        <p>
            {{ $proyek['teknologi'] }}
        </p>

        <h3 style="margin-top: 20px;">Kategori</h3>

        <p>{{ $proyek['kategori'] }}</p>
    </section>

</div>

<section class="card" style="margin-top: 24px;">
    <span class="eyebrow" style="color: #2563eb;">
        Pembelajaran
    </span>

    <h2>Nilai dari Proyek Ini</h2>

    <p>
        Proyek ini menjadi sarana untuk menerapkan
        pengetahuan, melatih pemecahan masalah, dan
        meningkatkan pemahaman terhadap teknologi yang digunakan.
    </p>

    <a href="{{ route('proyek') }}" class="button">
        Jelajahi Proyek Lain &rarr;
    </a>
</section>

@endsection