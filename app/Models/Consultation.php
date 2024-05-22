<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table='consultation';
    protected $primaryKey = 'idconsultation';
    public $incrementing = false;
    public $keyType = 'string';
    public function dossier(){
        return $this->belongsTo(Dossier::class,'numerodossier');
    }
    public function examen(){
        return $this->belongsToMany(Examen::class, 'necessiter', 'idconsultation', 'idexam')->withPivot('dateexam', 'raison', 'resultatsexam');
    }
    public function specialiste(){
        return $this->belongsToMany(Specialiste::class, 'intervenir', 'idconsultation', 'idspecialiste')->withPivot('tache');
    }
}
