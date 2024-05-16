<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Services\IdentifiantService;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(Dossier::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numeroDossier = IdentifiantService::genererIdentifiant('PAT-') ;
        $data = $request->all();
        $data['numeroDossier'] = $numeroDossier;
        $dossier = Dossier::create($data);
        return Response($dossier);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function show(Dossier $dossier, $id)
    {
        $dossier = Dossier::findOrFail($id);
        return Response($dossier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dossier $dossier, $id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->update($request->all());
        return Response($dossier);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dossier $dossier, $id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->delete();
        return response()->json(['message' => 'Dossier supprimé avec succès']);
    }

    // Méthode pour rechercher un dossier par son nom
    public function findByNom(Request $request)
    {
        $nom = $request->input('nom');
        $matching = Dossier::where('nom', $nom)->get('numerodossier');
        $dossier = [];
        foreach($matching as $item){
            Dossier::show($item);
        }
        return $dossier;
    }
}
