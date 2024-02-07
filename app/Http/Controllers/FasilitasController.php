<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Image_Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {

        return view('index', [
            "title" => "Fasilitas Jurusan Elektro",
            "menu" => "fasilitas",
            "view" => "fasilitas",
            "data_fasilitas" => Fasilitas::all(),
            "images" => Image_Fasilitas::all()
        ]);
    }
}
