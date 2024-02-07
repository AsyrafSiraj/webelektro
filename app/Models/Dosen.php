<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Dosen extends Model {
    //

    protected $guarded      = ['id'];
    protected $connection 	= 'main_db';
    protected $table 		= 'table_dosen';

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_dosen', 'like', '%' . $search . '%')
                        ->orWhere('nidn', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
        });

    }

    // function dosen_list($where = NULL){
    // 	$datadb = new Dosen;

    // 	if($where){
	//     	$datadb = $datadb->whereRaw($where);
    // 	}

    // 	$datadb = $datadb->get();

    // 	return $datadb;
    // }

}