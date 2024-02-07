<?php
 
namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Category;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class PengumumanController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index(Request $request){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        
        
        return view('index', [
            "title" => $title,
            "menu" => "pengumuman",
            "view" => "pengumuman",
            "data_pengumuman" => Pengumuman::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString()
        ]);
        
    }

    public function show(Pengumuman $pengumuman){
        return view('index',[
            "menu" => "pengumuman",
            "view" => "detail_pengumuman",
            "data" => $pengumuman->load('category')
        ]);
    }

    // function list(Request $request){

    //     $data_pengumuman = [];

    //     $where = [];
    //     $param = [];

    //     $data['data_show'] = [];

    //     $datadb = $this->pengumuman->pengumuman_list($where, $param);
    //     foreach ($datadb as $key => $value) {
    //         $data['data_show'][] = $value;
    //     }
    //     unset($where);

    //     $data['title'] = 'PENGUMUMAN';
    //     $data['menu'] = 'pengumuman';
    //     $data['view'] = 'admin.pengumuman.pengumuman_list';

    //     return view('admin.index', $data);
    // }

    // function detail(Request $request){
    //     $post = $request->post();

    //     $id = $post['id'];

    //     $where = [];
    //     $where[] = " id = '".$id."' ";
    //     $datadb = $this->pengumuman->pengumuman_list(@$where, @$param);
    //     unset($where);
    //     $data['data_show'] = $datadb[0];

    //     return view('admin.pengumuman.pengumuman_detail', $data)->render();
    // }

    // function add(Request $request){
    //     $post = $request->post();

    //     $data = [];

    //     return view('admin.pengumuman.pengumuman_add', $data)->render();
    // }

    // function add_process(Request $request){
    //     $post = $request->post();

    //     $judul      = $post['judul'];
    //     $content    = $post['content'];

    //     $form_data = array(
    //         'judul' => $judul,
    //         'isi' => $content,
    //         'created_by' => 1,
    //     );

    //     $this->pengumuman->pengumuman_add($form_data);
    //     unset($form_data);

    //     return redirect()->back()->with(['success' => 'Successfuly Added Data']);
    // }

    // function update_process(Request $request){
    //     $post = $request->post();

    //     $id         = $post['id'];

    //     $judul      = $post['judul'];
    //     $content    = $post['content'];

    //     $where = [];
    //     $where[] = " id = '".$id."' ";

    //     $form_data = array(
    //         'judul' => $judul,
    //         'isi' => $content
    //     );

    //     $this->pengumuman->pengumuman_update($form_data, $where);
    //     unset($form_data);

    //     return redirect()->back()->with(['success' => 'Successfuly Updated Data']);
    // }

    // function delete_process(Request $request){

    //     $id = $request->id;

    //     $where = [];
    //     $where[] = " id = '".$id."' ";

    //     $this->pengumuman->pengumuman_delete($where);
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