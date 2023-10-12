<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $fillable = array('name', 'desc', 'picture', 'TypeId');
    public function type()
    {
        return $this->belongsTo(ActorType::class);
    }
}
