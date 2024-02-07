<?php
 
namespace App\Http\Controllers;

use App\Models\Dosen;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class DosenController extends Controller
{
    

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index(){
        return view('index', [
            "title" => "STRUKTURAL TEKNIK ELEKTRO",
            "menu" => "dosen",
            "view" => "dosen",
            "data_dosen" => Dosen::all(),
        ]);
    }

    // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }
}