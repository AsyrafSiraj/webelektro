<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Pengumuman;
use App\Models\Category;
use App\Models\Prodi;

class CheckslugController extends Controller
{
    
    public function SlugPengumuman(Request $request){
        $slug = SlugService::createSlug(Pengumuman::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function SlugCategories(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
    
    public function SlugProdi(Request $request){
        $slug = SlugService::createSlug(Prodi::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
