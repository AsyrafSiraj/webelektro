<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Pengumuman extends Model {
    //
    use HasFactory;
    use Sluggable;

    protected $guarded      = ['id'];
    protected $connection 	= 'main_db';
    protected $table 		= 'table_pengumuman';
    protected $with         = ['category'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%')
                        ->orwhereHas('Category', function($query) use ($search){
                            $query->where('name', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('Category', function($query) use ($category){
                $query->where('slug', $category);
            });
      
        });

    }

    


    public function Category(){

        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}