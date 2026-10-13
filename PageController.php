<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $skills = ['Laravel dasar', 'Blade templating', 'Routing', 'MVC'];

        return view('about', [
            'nama'   => 'ISI_NAMA_LENGKAP',
            'kampus' => 'Universitas Negeri Medan',
            'prodi'  => 'ISI_PRODI',
            'skills' => $skills,
        ]);
    }
}
