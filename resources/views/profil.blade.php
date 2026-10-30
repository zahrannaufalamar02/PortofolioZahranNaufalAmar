@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')

<section class="page-title">
    <span class="eyebrow">Tentang Saya</span>
    <h1>Mengenal Saya Lebih Dekat</h1>
    <p>
        Perjalanan akademik, minat, dan tujuan saya dalam
        mengembangkan kemampuan di bidang teknologi informasi.
    </p>
</section>

<div class="profile-layout">

    <section class="card">
        <img
            src="{{ asset('images/profil.jpeg') }}"
            alt="Foto profil {{ $mahasiswa['nama'] }}"
            class="profile-photo"
        >

        <h2 style="margin-top: 20px;">
            {{ $mahasiswa['nama'] }}
        </h2>

        <p>{{ $mahasiswa['jurusan'] }}</p>

        <span class="tag">Mahasiswa</span>
        <span class="tag">Technology</span>
    </section>

    <section class="card">
        <span class="project-number">PROFIL MAHASISWA</span>

        <h2>Tentang Saya</h2>

        <p>
            Mahasiswa yang memiliki semangat belajar,
            terbuka terhadap pengalaman baru, dan terus
            mengembangkan keterampilan digital.
        </p>

        <h3 style="margin-top: 24px;">
            Informasi Akademik
        </h3>

        <ul class="info-list">
            <li>
                <strong>Nama</strong><br>
                {{ $mahasiswa['nama'] }}
            </li>
            

            <li>
                <strong>Program Studi</strong><br>
                {{ $mahasiswa['jurusan'] }}
            </li>

            <li>
                <strong>Perguruan Tinggi</strong><br>
                {{ $mahasiswa['kampus'] }}
            </li>
        </ul>

        <a href="{{ route('keahlian') }}" class="button"
           style="margin-top: 24px;">
            Lihat Keahlian &rarr;
        </a>
    </section>

</div>

<section class="card" style="margin-top: 24px;">
    <span class="eyebrow" style="color: #2563eb;">
        Visi Pengembangan Diri
    </span>

    <h2>Belajar Hari Ini, Berkarya untuk Masa Depan</h2>

    <p>
        Saya ingin terus meningkatkan kemampuan teknis,
        kreativitas, dan cara berpikir kritis melalui
        pembelajaran serta pengerjaan proyek.
    </p>

    <p>
        Setiap pengalaman menjadi kesempatan untuk
        memperluas wawasan dan menghasilkan karya
        digital yang bermanfaat.
    </p>

    <a href="{{ route('keahlian') }}" class="button">
        Jelajahi Keahlian &rarr;
    </a>
</section>

@endsection