<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function beranda()
    {
        return view('beranda', ['title' => 'Beranda']);
    }

    public function visi_misi()
    {
        return view('pages/visi_misi', ['title' => 'Visi & Misi']);
    }

    public function sejarah()
    {
        return view('pages/sejarah', ['title' => 'Sejarah']);
    }

    public function prestasi()
    {
        return view('pages/prestasi', ['title' => 'Prestasi']);
    }

    public function kontak()
    {
        return view('pages/kontak', ['title' => 'Kontak']);
    }

    public function bkk()
    {
        return view('pages/bkk', ['title' => 'BKK']);
    }
}
