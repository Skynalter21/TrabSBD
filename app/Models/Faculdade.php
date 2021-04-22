<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculdade extends Model
{
    protected $table = 'faculdade';
    protected $fillable = [
        'nome',
        'sigla',
        'bloco',
        'numAlunos',
        'numProfessor',
        'orcamento',
    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/faculdade/' . $this->getKey());
    }
}
