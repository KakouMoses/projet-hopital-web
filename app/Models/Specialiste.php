<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialiste extends Model
{
    use HasFactory;
    protected $table='specialiste';
    protected $primaryKey = 'idspecialiste';
    public $incrementing = false;
    public $keyType = 'string';

    protected $fillable = ['nomspecialiste', 'prenomspecialiste', 'specialite', 'grade'];
    public function consultation(){
        return $this->belongsToMany(Consultation::class, 'intervenir',  'idspecialiste', 'idconsultation')->withPivot('tache');
    }
}
