<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;


class Employé extends Model
{
    use HasFactory;

    protected $dates=['created_at'];

    protected $fillable=[
        'Nom_emp',
        'Sexe',
        'Age',
        'Tel',
        'Ville',
        'AdrPhysique_emp',
        'email',
        'Type_emp',
        'Specialite_emp',
        'password',
        'image'
    ];

    public function rapport(){
        return $this->hasmany(Rapport::class);
    }
}
