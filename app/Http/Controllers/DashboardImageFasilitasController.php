<?php

namespace App\Http\Controllers;

use App\Models\Image_Fasilitas;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardImageFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            "title" => "Image Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "image_fasilitas",
            "view" => "admin.dashboard.image_fasilitas",
            "data" => Image_Fasilitas::latest()->filter(request(['search']))->paginate(5)->withQueryString()
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
            "title" => "Create Subimages Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "image_fasilitas",
            "view" => "admin.fasilitas.imagefasilitas_add",
            "images" => Image_Fasilitas::all(),
            "data" => Fasilitas::all()
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
            'fasilitas_id' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('fasilitas-image');
        }

        Image_Fasilitas::create($validatedData);

        return redirect('/dashboard/image_fasilitas')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image_Fasilitas  $image_Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Image_Fasilitas $image_fasilita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image_Fasilitas  $image_Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Image_Fasilitas $image_fasilita)
    {
        return view('admin.index', [
            "title" => "Edit Subimage Fasilitas",
            "sidemenu" => "fasilitas",
            "segmen" => "image_fasilitas",
            "view" => "admin.fasilitas.imagefasilitas_edit",
            "data" => $image_fasilita,
            "data2" => Fasilitas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image_Fasilitas  $image_Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image_Fasilitas $image_fasilita)
    {
        $validatedData = $request->validate([
            'fasilitas_id' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        Image_Fasilitas::Where('id', $image_fasilita->id)
            ->update([
                'fasilitas_id' => $validatedData['fasilitas_id']
            ]);

        if ($request->file('image')) {
            if ($request->image) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fasilitas-image');

            Image_Fasilitas::Where('id', $image_fasilita->id)
                ->update([
                    'image' => $validatedData['image']
                ]);
        }
        return redirect('/dashboard/image_fasilitas')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image_Fasilitas  $image_Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image_Fasilitas $image_fasilita)
    {

        if ($image_fasilita->image) {
            Storage::delete($image_fasilita->image);
        }

        Image_Fasilitas::Where('id', $image_fasilita->id)
            ->delete();

        return redirect('/dashboard/image_fasilitas')->with('success', 'Post has been deleted! ');
    }
}
