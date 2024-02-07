<?php
 
namespace App\Http\Controllers;

use App\Models\Workspace;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class WorkspaceController extends Controller
{
    // public function __construct(){
    //     $this->workspace = new Workspace;

    //     $this->view = 'admin.fasilitas.workspace';

    // }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

        public function index(){
            $data1 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) > 1')
                ->get();
            $data2 = Workspace::select('jurusan') // Ganti jurusan dengan nama kolom yang ingin dijadikan acuan filter
                ->groupBy('jurusan')
                ->havingRaw('COUNT(jurusan) = 1')
                ->get();
            $data = $data1->concat($data2);
           
            return view('index', [
                "title" => "Workspace Jurusan Elektro",
                "menu" => "fasilitas",
                "submenu" => "workspace",
                "view" => "fasilitas.workspace",
                "data" => $data,
                "data_fasilitas" => Workspace::all()
            ]);
        }



    // function list(Request $request){

    //     $data_pengumuman = [];

    //     $where = [];
    //     $param = [];

    //     $data['data_show'] = [];

    //     $datadb = $this->workspace->workspace_list($where, $param);
    //     foreach ($datadb as $key => $value) {
    //         $data['data_show'][] = $value;
    //     }
    //     unset($where);

    //     $data['title'] = 'WORKSPACE';
    //     $data['menu'] = 'fasilitas';
    //     $data['view'] = 'admin.fasilitas.workspace.workspace_list';
    //     // $data['view'] = $this->view.'/workspace_list';

    //     return view('admin.index', $data);
    // }

    // function detail(Request $request){

    //     $post = $request->post();

    //     $id = $post['id'];

    //     $where = [];
    //     $where[] = " id = '".$id."' ";
    //     $datadb = $this->workspace->workspace_list(@$where, @$param);
    //     unset($where);
    //     $data['data_show'] = $datadb[0];

    //     // print_r($this->view.'.workspace_detail');exit;

    //     return view($this->view.'.workspace_detail', $data)->render();
    // }

    // function add(Request $request){
    //     $post = $request->post();

    //     $data = [];

    //     return view($this->view.'/workspace_add', $data)->render();
    // }

    // function add_process(Request $request){
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $post = $request->post();

    //     $nama_fasilitas = $post['nama_fasilitas'];
    //     $deskripsi    = $post['deskripsi'];

    //     $imageName = time().'.'.$request->image->extension();  
    //     $request->image->move(public_path('images'), $imageName);  

    //     $form_data = array(
    //         'nama_fasilitas'    => $nama_fasilitas,
    //         'deskripsi'         => $deskripsi,
    //         'photo'             => $imageName,
    //     );

    //     $this->workspace->workspace_add($form_data);
    //     unset($form_data);

    //     return redirect()->back()->with(['success' => 'Successfuly Added Data']);
    // }

    // function update_process(Request $request){
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $post = $request->post();

    //     $id         = $post['id'];

    //     $nama_fasilitas = $post['nama_fasilitas'];
    //     $deskripsi    = $post['deskripsi'];

    //     if(isset($request->image)){
    //         $where = [];
    //         $where[] = " id = '".$id."' ";
    //         $datadb = $this->workspace->workspace_list(@$where, @$param);
    //         unset($where);
    //         $datadb = $datadb[0];

    //         $filename = $_SERVER['DOCUMENT_ROOT'];

    //         print_r($filename);exit;
    //         unlink($filename);

    //         $imageName = time().'.'.$request->image->extension();  
    //         $request->image->move(public_path('images'), $imageName);  
    //     }

    //     $where = [];
    //     $where[] = " id = '".$id."' ";

    //     $form_data = array(
    //         'nama_fasilitas'    => $nama_fasilitas,
    //         'deskripsi'         => $deskripsi,
    //         'photo'             => $imageName,
    //     );

    //     $this->workspace->workspace_update($form_data, $where);
    //     unset($form_data);

    //     return redirect()->back()->with(['success' => 'Successfuly Updated Data']);
    // }

    // function delete_process(Request $request){

    //     $id = $request->id;

    //     $where = [];
    //     $where[] = " id = '".$id."' ";

    //     $this->workspace->pengumuman_delete($where);
    //     unset($where);

    //     return redirect()->back()->with(['success' => 'Successfuly Updated Data']);
    // }



    // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }
}