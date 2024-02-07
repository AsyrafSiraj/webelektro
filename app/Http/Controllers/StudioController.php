<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;

class StudioController extends Controller
{
    public function index(){
        $data1 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) > 1')
            ->get();
        $data2 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) = 1')
            ->get();
        $data = $data1->concat($data2);
       
        return view('index', [
            "title" => "Studio Jurusan Elektro",
            "menu" => "fasilitas",
            "submenu" => "studio",
            "view" => "fasilitas.studio",
            "data" => $data,
            "data_fasilitas" => Studio::all()
        ]);
    }
}
