<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    protected $table = 'universidade';
    protected $fillable = [
        'id',
        'nome',
        'created_at',
        'updated_at'
    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/universidade/' . $this->getKey());
    }
}
