<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return '2141762126 - Gilang Pambudi Wibawanto';
    }
    public function articles($id) {
        return 'Halaman artikel dengan ID: '.$id;
    }
}
