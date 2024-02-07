<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Hero;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //

    // public function index(Prodi $prodi){

    //         // Kode yang mungkin menyebabkan exception
    //         return view('prodi', [
    //             "title" => "Animasi",
    //             "warna" => "#ff689b",
    //             "data" => $prodi->load('hero', 'about', 'tujuan', 'capaian', 'kurikulum', 'title_semester', 'lulusan')
    //         ]);

    // }

    public function manufaktur()
    {
        return view('prodi.manufaktur', [
            "title" => "Elektronika Manufaktur",
            "warna" => ""
        ]);
    }
    public function instrumentasi()
    {
        return view('prodi.instrumentasi', [
            "title" => "Teknik Instrumentasi",
            "warna" => ""
        ]);
    }
    public function rpe()
    {
        return view('prodi.rpe', [
            "title" => "Rekayasa Pembangkit Energi",
            "warna" => ""
        ]);
    }
    public function elektronika()
    {
        return view('prodi.elektronika', [
            "title" => "Rekayasa Elektronika",
            "warna" => ""
        ]);
    }
    public function mekatronika()
    {
        return view('prodi.mekatronika', [
            "title" => "Teknik Mekatronika",
            "warna" => ""
        ]);
    }
    public function robotika()
    {
        return view('prodi.elektronika', [
            "title" => "Teknik Robotika",
            "warna" => ""
        ]);
    }
}
