<?php
 
namespace App\Http\Controllers;

use App\Models\Prestasi;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class PrestasiController extends Controller
{
   

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index(){
        return view('index', [
            "title" => "MAHASISWA BERPRESTASI",
            "menu" => "prestasi",
            "view" => "prestasi",
            "data_prestasi" => Prestasi::all()
        ]);
    }

    // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }
}