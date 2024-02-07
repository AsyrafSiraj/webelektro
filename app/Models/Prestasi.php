<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Prestasi extends Model {
    //

    protected $guarded      = ['id'];
    protected $connection 	= 'main_db';
    protected $table 		= 'table_prestasi';

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

    }

}