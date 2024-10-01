<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable=[
        'DateDebut_cnt',
        'DateFin_cnt',
        'DateControle_cnt',
        'entreprise_id',
    ];
}
