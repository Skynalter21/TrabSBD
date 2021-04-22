<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LstSalas extends Model
{
    protected $table = 'lst_salas';
    protected $fillable = [
        'id',
        'capacidade',
        'nome_bloco',
        'num_salas',
        'created_at',
        'updated_at'
    ];
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/lst_salas/' . $this->getKey());
    }
}
