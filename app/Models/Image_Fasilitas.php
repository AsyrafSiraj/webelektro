<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Fasilitas extends Model
{
    use HasFactory;
    protected $guarded      = ['id'];
    protected $connection     = 'main_db';
    protected $table         = 'image_fasilitas';
    protected $with         = ['fasilitas'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('fasilitas_id', 'like', '%' . $search . '%');
        });
    }

    public function fasilitas()
    {

        return $this->belongsTo(Fasilitas::class);
    }
}
