<?php

namespace App\Http\Controllers;

use \App\Models\Fasilitas;
use \App\Models\Image_Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            "title" => "Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "fasilitas",
            "view" => "admin.dashboard.fasilitas",
            "data" => Fasilitas::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index', [
            "title" => "Create Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "fasilitas",
            "view" => "admin.fasilitas.fasilitas_add",
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|file|max:1024',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('fasilitas-image');
        }

        $image = Fasilitas::create([
            'name' => $validatedData['name'],
            'deskripsi' => $validatedData['deskripsi']
        ]);

        Image_Fasilitas::create([
            'fasilitas_id' => $image->id,
            'image' => $validatedData['image']
        ]);

        return redirect('/dashboard/fasilitas')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilita
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilita)
    {
        return view('admin.index', [
            "title" => "Edit Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "fasilitas",
            "view" => "admin.fasilitas.fasilitas_edit",
            "data" => $fasilita,
            "images" => Image_Fasilitas::where('fasilitas_id', $fasilita->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilita)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ]);

        Fasilitas::Where('id', $fasilita->id)
            ->update([
                'name' => $validatedData['name'],
                'deskripsi' => $validatedData['deskripsi']
            ]);

        if ($request->file('image')) {
            if ($request->image) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fasilitas-image');

            Image_Fasilitas::Where('fasilitas_id', $fasilita->id)
                ->first()
                ->update([
                    'image' => $validatedData['image']
                ]);
        }
        return redirect('/dashboard/fasilitas')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilita)
    {
        $image = Image_Fasilitas::Where('fasilitas_id', $fasilita->id)
            ->first();

        if ($image->image) {
            Storage::delete($image->image);
        }

        Fasilitas::destroy($fasilita->id);
        Image_Fasilitas::Where('fasilitas_id', $fasilita->id)
            ->delete();

        return redirect('/dashboard/fasilitas')->with('success', 'Post has been deleted! ');
    }
}
