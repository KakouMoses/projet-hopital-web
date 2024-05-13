<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $table='dossier';
    protected $primaryKey = 'numeroDossier';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nom', 'prenom', 'datenaissance', 'lieunaissance', 'sexe', 'profession', 'contact', 'email', 'groupesanguin', 'antecedents'];
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
}
