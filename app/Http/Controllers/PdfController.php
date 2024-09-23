<?php

namespace App\Http\Controllers;

use App\Models\PenjualanBuku;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePDF() {

        $penjualanBukus = PenjualanBuku::all();

        $data = [
            'title' => 'Laporan Penjualan Buku',
            'date' => date('d-m-Y'),
            'penjualanBukus' => $penjualanBukus,

        ];


        $Pdf = Pdf::loadView('buku', $data);

        // Mengunduh file PDF
        return $Pdf->download('laporan-penjualan-buku.pdf');
    }

    public function streamPDF() {

        $penjualanBukus = PenjualanBuku::all();

        $data = [
            'title' => 'Laporan Penjualan Buku',
            'date' => date('d-m-Y'),
            'penjualanBukus' => $penjualanBukus,

        ];


        $Pdf = Pdf::loadView('buku', $data);

        // Menampilkan PDF langsung di browser
        return $Pdf->stream('laporan-penjualan-buku.pdf');
    }

}