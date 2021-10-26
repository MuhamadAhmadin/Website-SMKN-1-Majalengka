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
}
