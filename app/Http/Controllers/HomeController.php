<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Daftar data buku dalam array
        $buku = [
            ['judul' => 'Belajar Laravel', 'pengarang' => 'John Doe', 'tahun_terbit' => 2021],
            ['judul' => 'Laut Bercerita', 'pengarang' => 'Leila S. Chudori', 'tahun_terbit' => 2020],
            ['judul' => 'Framework Web', 'pengarang' => 'Robert Brown', 'tahun_terbit' => 2020],
            ['judul' => 'Santri Pilihan Bunda', 'pengarang' => 'Syalsyabila Falensia', 'tahun_terbit' => 2021],
            ['judul' => 'Pemrograman Dasar', 'pengarang' => 'Michael Scott', 'tahun_terbit' => 2018],
        ];

        // Mengirimkan data buku ke view
        return view('home', compact('buku'));
    }
}
