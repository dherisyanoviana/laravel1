<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::latest()->get();
        return view("penggunaTable", compact("pengguna"));
    }
}