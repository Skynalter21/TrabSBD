<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculdade extends Model
{
    protected $table = 'faculdade';
    protected $fillable = [
        'idFaculdade',
        'sigla',
        'bloco',
        'numAlunos',
        'numProfessor',
        'orcamento',
        'nome'
    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/faculdade/' . $this->getKey());
    }
}
