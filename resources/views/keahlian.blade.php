@extends('layouts.app')

@section('title', 'Keahlian')

@section('content')

<section class="page-title">
    <span class="eyebrow">Kompetensi Digital</span>
    <h1>Keahlian & Bidang yang Saya Pelajari</h1>
    <p>
        Kumpulan keterampilan yang saya kembangkan melalui
        pembelajaran, eksplorasi teknologi, dan pengerjaan proyek.
    </p>
</section>

<section class="grid">

    @foreach ($keahlian as $index => $item)
        <article class="card">

            <span class="project-number">
                KOMPETENSI {{ sprintf('%02d', $index + 1) }}
            </span>

            <h3>{{ $item['nama'] }}</h3>

            <p>{{ $item['deskripsi'] }}</p>

            <div style="margin-top: 16px;">
                <span class="tag">Sedang Dikembangkan</span>
            </div>

        </article>
    @endforeach

</section>

<section class="card" style="margin-top: 30px;">
    <span class="eyebrow" style="color: #2563eb;">
        Komitmen Belajar
    </span>

    <h2>Terus Bertumbuh dan Beradaptasi</h2>

    <p>
        Saya percaya bahwa kemampuan dapat terus berkembang
        melalui latihan, konsistensi, evaluasi, dan kemauan
        untuk mempelajari hal-hal baru.
    </p>

    <a href="{{ route('proyek') }}" class="button">
        Lihat Penerapan Keahlian &rarr;
    </a>
</section>

@endsection