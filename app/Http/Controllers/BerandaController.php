<?php
 
namespace App\Http\Controllers;

use App\Models\Pengumuman;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class BerandaController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index(){

        return view('index',[
            "view" => "beranda",
            "menu" => "beranda"
        ]);
    }

    // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }
}