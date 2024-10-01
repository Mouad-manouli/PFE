<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $dates=['DateDebut'];
    protected $date=['DateFin'];

    protected $fillable =[
        'DateDebut',
        'DateFin',
        'Etat_machine',
        'Description',
        'entreprise_id',
        'machine_id',
        'employé_id'
    ];

    public function employee(){
        return $this->belongsto(Employé::class);
    }

    public function entreprise(){
        return $this->belongsto(Entreprise::class);
    }

    public function machine(){
        return $this->belongsto(Machine::class);
    }
}
