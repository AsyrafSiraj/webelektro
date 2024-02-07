<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardWorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Workspace",
            "sidemenu" => "fasilitas",
            "segmen" => "workspace",
            "view" => "admin.dashboard.workspace",
            "data" => Workspace::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) > 1')
                ->get();
            $data2 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) = 1')
                ->get();
            $data = $data1->concat($data2);

        return view('admin.index',[
            "title" => "Create Workspace",
            "sidemenu" => "fasilitas",
            "segmen" => "workspace",
            "view" => "admin.workspace.workspace_add",
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

        if (!str_starts_with($rules['jurusan'], 'Workspace')) {
            // Cek apakah string 'workspace' ditemukan di dalam variabel
            $rules['jurusan'] = Str::title($rules['jurusan']);
            if (strpos($rules['jurusan'], 'Workspace') === false) {
                $rules['jurusan'] = 'Workspace ' . $rules['jurusan']; // Tambahkan 'workspace' di awal
            }
        }

        $validatedData = $rules;

        Workspace::create($validatedData);
        
        return redirect('/dashboard/workspace')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function show(Workspace $workspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workspace $workspace)
    {
        $data1 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) > 1')
            ->get();
        $data2 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
            ->groupBy('jurusan')
            ->havingRaw('COUNT(jurusan) = 1')
            ->get();
        $data = $data1->concat($data2);

        return view('admin.index',[
            "title" => "Edit Workspace",
            "sidemenu" => "fasilitas",
            "segmen" => "workspace",
            "view" => "admin.workspace.workspace_edit",
            "data" => $workspace,
            "data2" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workspace $workspace)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'jurusan' => 'required',
            'deskripsi' => 'required'
        ]);


        Workspace::Where('id', $workspace->id)
                ->update($validatedData);
        
        return redirect('/dashboard/workspace')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workspace $workspace)
    {
        
        Workspace::destroy($workspace->id);
        
        return redirect('/dashboard/workspace')->with('success', 'Post has been deleted! ');
    }


    public function add_jurusan(){
        return view('admin.index',[
            "title" => "Create Workspace | Jurusan",
            "sidemenu" => "fasilitas",
            "segmen" => "workspace",
            "view" => "admin.workspace.add_jurusan",
        ]);
    }
}
