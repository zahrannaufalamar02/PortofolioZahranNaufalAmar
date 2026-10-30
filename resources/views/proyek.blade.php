@extends('layouts.app')

@section('title', 'Proyek Saya')

@section('content')

<section class="page-title">
    <span class="eyebrow">Karya dan Pengalaman</span>
    <h1>Proyek Pilihan Saya</h1>
    <p>
        Dokumentasi proyek pembelajaran yang menjadi bagian
        dari proses pengembangan kemampuan teknologi dan kreativitas.
    </p>
</section>

<div class="section-heading">
    <h2>Daftar Portofolio</h2>
    <p>
        Setiap proyek memberikan pengalaman dan pengetahuan baru.
    </p>
</div>

<div class="grid">

    @foreach ($proyek as $index => $item)
        <article class="card">

            <span class="project-number">
                PROJECT {{ sprintf('%02d', $index + 1) }}
            </span>

            <h3>{{ $item['nama'] }}</h3>

            <span class="tag">
                {{ $item['kategori'] }}
            </span>

            <p style="margin-top: 16px;">
                {{ $item['deskripsi'] }}
            </p>

            <a
                href="{{ route('detail-proyek', ['id' => $item['id']]) }}"
                class="button"
                style="margin-top: 15px;"
            >
                Pelajari Proyek &rarr;
            </a>

        </article>
    @endforeach

</div>

<section class="card" style="margin-top: 35px;">
    <span class="eyebrow" style="color: #2563eb;">
        Proses Berkarya
    </span>

    <h2>Ide Menjadi Implementasi</h2>

    <p>
        Proyek-proyek ini mendokumentasikan penerapan materi
        yang dipelajari. Deskripsi dan teknologi yang digunakan
        dapat dikembangkan sesuai hasil pekerjaan yang sebenarnya.
    </p>

</section>

@endsection