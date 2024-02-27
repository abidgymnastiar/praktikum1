<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return 'Nim : 2241720043 & Nama : Abid Gymnastiar Alfiansyah';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID - ' . $id;
    }
}
