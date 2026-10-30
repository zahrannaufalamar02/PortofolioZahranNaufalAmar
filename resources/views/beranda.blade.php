@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">

    <div class="hero-layout">

        <div class="hero-content">

            <span class="eyebrow">
                Mahasiswa · Teknologi Informasi
            </span>

            <h1>
                Halo, saya
                <span>{{ $mahasiswa['nama'] }}</span>.
                <br>
                Belajar, Berkarya, dan Berinovasi.
            </h1>

            <p>
                {{ $mahasiswa['deskripsi'] }}
                Saya memiliki ketertarikan pada pengembangan
                website, desain digital, dan teknologi.
            </p>

            <div class="hero-actions">
                <a href="{{ route('proyek') }}" class="button">
                    Jelajahi Proyek &rarr;
                </a>

                <a href="{{ route('profil') }}"
                   class="button button-outline">
                    Tentang Saya
                </a>
            </div>

        </div>

        <div>
            <img
                src="{{ asset('images/profil.jpeg') }}"
                alt="Foto profil {{ $mahasiswa['nama'] }}"
                class="hero-photo"
            >
        </div>

    </div>

</section>

<section>

    <div class="section-heading">
        <span class="eyebrow" style="color: #2563eb;">
            Perkenalan
        </span>

        <h2>Membangun Kompetensi Digital</h2>

        <p>
            Mengenal profil akademik, kemampuan, dan karya
            yang saya kembangkan selama proses pembelajaran.
        </p>
    </div>

    <div class="grid">

        <article class="card">
            <span class="project-number">01 / PROFIL</span>

            <h3>Tentang Saya</h3>

            <p>
                Kenali latar belakang pendidikan, minat,
                dan tujuan saya dalam mengembangkan
                kompetensi di bidang teknologi informasi.
            </p>

            <a href="{{ route('profil') }}" class="back">
                Lihat Profil &rarr;
            </a>
        </article>

        <article class="card">
            <span class="project-number">02 / KEAHLIAN</span>

            <h3>Kemampuan Digital</h3>

            <p>
                Eksplorasi kemampuan yang sedang saya pelajari,
                mulai dari pengembangan web hingga desain grafis.
            </p>

            <a href="{{ route('keahlian') }}" class="back">
                Lihat Keahlian &rarr;
            </a>
        </article>

        <article class="card">
            <span class="project-number">03 / PORTOFOLIO</span>

            <h3>Karya dan Proyek</h3>

            <p>
                Kumpulan proyek pembelajaran yang menunjukkan
                penerapan pengetahuan dan keterampilan digital.
            </p>

            <a href="{{ route('proyek') }}" class="back">
                Lihat Proyek &rarr;
            </a>
        </article>

    </div>

</section>

<section class="card" style="margin-top: 35px;">

    <span class="eyebrow" style="color: #2563eb;">
        Informasi Akademik
    </span>

    <h2>{{ $mahasiswa['jurusan'] }}</h2>

    <p>
        {{ $mahasiswa['kampus'] }}
    </p>

    <p>
        Portofolio ini merupakan media dokumentasi pembelajaran,
        pengembangan keterampilan, dan hasil karya mahasiswa.
    </p>

</section>

@endsection