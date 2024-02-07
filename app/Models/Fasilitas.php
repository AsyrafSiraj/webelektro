<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $guarded      = ['id'];
    protected $connection     = 'main_db';
    protected $table         = 'fasilitas';
    // protected $with         = ['image_fasilitas'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
    }

    public function image_fasilitas()
    {

        return $this->hasMany(Image_Fasilitas::class);
    }
}
