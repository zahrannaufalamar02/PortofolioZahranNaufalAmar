<?php

namespace App\Http\Controllers;

class PortofolioController extends Controller
{
    public function keahlian()
    {
        $keahlian = [
            [
                'nama' => 'HTML dan CSS',
                'deskripsi' => 'Membuat struktur dan desain halaman website.'
            ],
            [
                'nama' => 'Laravel dan PHP',
                'deskripsi' => 'Mempelajari pengembangan website menggunakan Laravel.'
            ],
            [
                'nama' => 'Desain Grafis',
                'deskripsi' => 'Membuat desain poster, banner, dan konten digital.'
            ],
            [
                'nama' => 'Microsoft Office',
                'deskripsi' => 'Mengolah dokumen, presentasi, dan data.'
            ]
        ];

        return view('keahlian', compact('keahlian'));
    }

    public function proyek()
    {
        $proyek = [
            [
                'id' => 1,
                'nama' => 'Website Katalog Buku',
                'kategori' => 'Web Development',
                'deskripsi' => 'Website katalog buku menggunakan Laravel dengan data statis.'
            ],
            [
                'id' => 2,
                'nama' => 'Aplikasi Katalog Komputer',
                'kategori' => 'Mobile Development',
                'deskripsi' => 'Aplikasi katalog produk komputer menggunakan Flutter dan Dart.'
            ],
            [
                'id' => 3,
                'nama' => 'Desain Poster Digital',
                'kategori' => 'Graphic Design',
                'deskripsi' => 'Proyek desain poster untuk menyampaikan informasi secara menarik.'
            ]
        ];

        return view('proyek', compact('proyek'));
    }

    public function detailProyek($id)
    {
        $proyek = [
            1 => [
                'nama' => 'Website Katalog Buku',
                'kategori' => 'Web Development',
                'teknologi' => 'Laravel, PHP, HTML, dan CSS',
                'deskripsi' => 'Website yang menampilkan daftar buku beserta informasi detailnya menggunakan Laravel.'
            ],
            2 => [
                'nama' => 'Aplikasi Katalog Komputer',
                'kategori' => 'Mobile Development',
                'teknologi' => 'Flutter dan Dart',
                'deskripsi' => 'Aplikasi mobile sederhana untuk menampilkan katalog produk komputer.'
            ],
            3 => [
                'nama' => 'Desain Poster Digital',
                'kategori' => 'Graphic Design',
                'teknologi' => 'Aplikasi desain grafis',
                'deskripsi' => 'Desain poster digital yang mengutamakan keterbacaan, komposisi, dan penyampaian informasi.'
            ]
        ];

        if (!isset($proyek[$id])) {
            abort(404);
        }

        return view('detail-proyek', [
            'proyek' => $proyek[$id]
        ]);
    }
}