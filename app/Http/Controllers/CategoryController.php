<?php
 
namespace App\Http\Controllers;

use App\Models\Category;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class CategoryController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index(){
        return view('index', [
            'menu' => 'pengumuman',
            'data' => Category::all(),
            'view' => 'categories'
    ]);
    }

    // public function category(Category $category){
        
    //     return view('index',[
    //         'title' => $category->name,
    //         'menu' => 'pengumuman',
    //         'data_pengumuman' => $category->Pengumuman->load('category'),
    //         'view' => 'pengumuman'

    //     ]);

    // }

    //     return view('index',[
    //         "view" => "beranda",
    //         "menu" => "beranda"
    //     ]);
    // }

    // // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }
}