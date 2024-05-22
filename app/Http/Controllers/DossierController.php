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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenaissance' => 'required|date',
            'lieunaissance' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'profession' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'groupesanguin' => 'nullable|string|max:3',
            'antecedents' => 'nullable|string',
        ]);
        $numeroDossier = IdentifiantService::genererIdentifiant('PAT-') ;
        $data = $request->all();
        $data['numeroDossier'] = $numeroDossier;
        Dossier::create($data);
        return redirect()->route('dossiers')->with('success', 'Dossier créé avec succès.');
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
        foreach($matching as $item){
            Dossier::show($item);
        }
    }
}
