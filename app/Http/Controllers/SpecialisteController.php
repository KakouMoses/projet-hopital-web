<?php

namespace App\Http\Controllers;

use App\Models\Specialiste;
use App\Services\IdentifiantService ;
use Illuminate\Http\Request;

class SpecialisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(Specialiste::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idspecialiste = IdentifiantService::genererIdentifiant('SPE') ;
        $data = $request->all();
        $data['idspecialiste'] = $idspecialiste;
        $consult = Specialiste::create($data);
        return Response($consult);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialiste  $specialiste
     * @return \Illuminate\Http\Response
     */
    public function show(Specialiste $specialiste, $id)
    {
        $specialiste = Specialiste::findOrFail($id);
        return Response($specialiste);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialiste  $specialiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialiste $specialiste, $id)
    {
        $specialiste = Specialiste::findOrFail($id);
        $specialiste->update($request->all());
        return Response($specialiste);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialiste  $specialiste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialiste $specialiste, $id)
    {
        $specialiste = Specialiste::findOrFail($id);
        $specialiste->delete();
        return response()->json(['message'=>'Speécialiste supprimé avec succès !']);
    }

    // Méthode pour obtenir les détails d'un spécialiste avec ses consultations
    public function showWithConsultations($id)
    {
        // Charger le spécialiste avec ses consultations
        return Specialiste::with('consultations')->findOrFail($id);
    }
}
