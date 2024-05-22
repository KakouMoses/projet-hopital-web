<?php


namespace App\Services;
use Carbon\Carbon;

class IdentifiantService
{
    private static $numPatient = 0;


    public static function genererIdentifiant(string $typePersonne)
    {
        // Incrémentez la variable statique à chaque fois que cette méthode est appelée
        self::$numPatient++;
        $date = Carbon::now();
        $dateString = $date->format('dmY');

        // Concaténez la variable statique avec d'autres informations pour former l'identifiant
        $identifiant = $typePersonne . $dateString . str_pad(self::$numPatient, 6, '0', STR_PAD_LEFT);;

        return $identifiant;
    }
}
