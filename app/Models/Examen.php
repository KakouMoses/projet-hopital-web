<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $primaryKey = 'idexam';
    protected $table='examen';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['libelleexam', 'dateexam', 'raison', 'resultats'];

    public function consultation(){
        return $this->belongsTo(Consultation::class);
    }
}
