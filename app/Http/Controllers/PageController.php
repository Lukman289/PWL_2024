<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    
    public function about() {
        return 'Nama: Lukman Eka Septiawan | NIM: 2241720049';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
