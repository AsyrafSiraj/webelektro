<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            "title" => "Dosen",
            "sidemenu" => "dosen",
            "segmen" => "dosen",
            "view" => "admin.dashboard.dosen",
            "data" => Dosen::latest()->filter(request(['search']))->paginate(7)->withQueryString()
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
            "title" => "Create Dosen",
            "sidemenu" => "dosen",
            "segmen" => "dosen",
            "view" => "admin.dosen.dosen_add",
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
            'nama_dosen' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'program_studi' => 'required',
            'nidn' => 'required|integer|unique:table_dosen',
            'email' => 'required|email',
            'spesialis' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('dosen-image');
        }

        Dosen::create($validatedData);

        return redirect('/dashboard/dosen')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('admin.index', [
            "title" => "Dosen",
            "sidemenu" => "dosen",
            "view" => "admin.dosen.dosen_detail",
            "data" => $dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.index', [
            "title" => "Edit Dosen",
            "sidemenu" => "dosen",
            "segmen" => "dosen",
            "view" => "admin.dosen.dosen_edit",
            "data" => $dosen

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $rules = [
            'nama_dosen' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'program_studi' => 'required',
            'email' => 'required|email',
            'spesialis' => 'required',
            'deskripsi' => 'required'
        ];

        if ($request->nidn != $dosen->nidn) {
            $rules['nidn'] = 'required|integer|unique:table_dosen';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->image) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('dosen-image');
        }

        Dosen::Where('id', $dosen->id)
            ->update($validatedData);

        return redirect('/dashboard/dosen')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        //
        if ($dosen->image) {
            Storage::delete($dosen->image);
        }
        Dosen::destroy($dosen->id);

        return redirect('/dashboard/dosen')->with('success', 'Post has been deleted! ');
    }
}
