<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardStudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Studio",
            "sidemenu" => "fasilitas",
            "segmen" => "studio",
            "view" => "admin.dashboard.studio",
            "data" => Studio::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) > 1')
                ->get();
            $data2 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) = 1')
                ->get();
            $data = $data1->concat($data2);

        return view('admin.index',[
            "title" => "Create Studio",
            "sidemenu" => "fasilitas",
            "segmen" => "studio",
            "view" => "admin.studio.studio_add",
            "data" => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $request->validate([
            'name' => 'required|max:255',
            'jurusan' => 'required',
            'deskripsi' => ''
        ]);

        if (!str_starts_with($rules['jurusan'], 'Studio')) {
            // Cek apakah string 'Studio' ditemukan di dalam variabel
            $rules['jurusan'] = Str::title($rules['jurusan']);
            if (strpos($rules['jurusan'], 'Studio') === false) {
                $rules['jurusan'] = 'Studio ' . $rules['jurusan']; // Tambahkan 'Studio' di awal
            }
        }

        $validatedData = $rules;

        Studio::create($validatedData);
        
        return redirect('/dashboard/studio')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        $data1 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) > 1')
            ->get();
        $data2 = Studio::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) = 1')
            ->get();
        $data = $data1->concat($data2);

        return view('admin.index',[
            "title" => "Edit Studio",
            "sidemenu" => "fasilitas",
            "segmen" => "studio",
            "view" => "admin.studio.studio_edit",
            "data" => $studio,
            "data2" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'jurusan' => 'required',
            'deskripsi' => 'required'
        ]);


        Studio::Where('id', $studio->id)
                ->update($validatedData);
        
        return redirect('/dashboard/studio')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        Studio::destroy($studio->id);
        
        return redirect('/dashboard/studio')->with('success', 'Post has been deleted! ');
    }

    public function add_jurusan(){
        return view('admin.index',[
            "title" => "Create Studio | Jurusan",
            "sidemenu" => "fasilitas",
            "segmen" => "studio",
            "view" => "admin.studio.add_jurusan",
        ]);
    }
}
