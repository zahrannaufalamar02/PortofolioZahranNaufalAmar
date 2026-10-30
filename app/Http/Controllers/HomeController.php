<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Zahran Naufal Amar',
            'nim' => 'C2483207012',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'kampus' => 'Universitas Muhammadiyah Tasikmalaya',
            'deskripsi' => 'Mahasiswa yang tertarik pada teknologi, desain, dan pengembangan aplikasi.'
        ];

        return view('beranda', compact('mahasiswa'));
    }

    public function profil()
    {
        $mahasiswa = [
            'nama' => 'Zahran Naufal Amar',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'kampus' => 'Universitas Muhammadiyah Tasikmalaya',
            'minat' => 'Pemrograman Web, Desain Grafis, dan Teknologi Informasi',
            'tujuan' => 'Mengembangkan kemampuan teknologi dan menghasilkan karya digital yang bermanfaat.'
        ];

        return view('profil', compact('mahasiswa'));
    }
}