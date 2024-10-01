<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Entreprise extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $dates=['created_at'];
    protected $fillable=[
        'Nom_ent',
        'Tel_ent',
        'Ville_ent',
        'AdrPhysique_ent',
        'SecteurActivite_ent',
        'Description_ent',
        'email',
        'password',
        'image'
    ];

    public function machines()
    {
        return $this->hasMany(Machine::class, 'entreprise_id');
    }

    public function rapport()
    {
        return $this->hasMany(Rapport::class, 'entreprise_id');
    }
}
