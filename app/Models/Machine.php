<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable=[
        'Materiel',
        'Model',
        'Etat',
        'image',
        'entreprise_id'
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'Id_ent');
    }

    public function rapport()
    {
        return $this->hasMany(Rapport::class);
    }
}
