<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = array('title', 'desc', 'picture', 'cretical', 'catId', 'auther', 'senareo', 'filmer',  'product', 'prod', 'date', 'duree','size'   );

    public function galery()
    {
        return $this->hasMany('Galery', 'filmId');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
