<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Services\IdentifiantService;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(Consultation::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idconsultation = IdentifiantService::genererIdentifiant('CONS') ;
        $data = $request->all();
        $data['idconsultation'] = $idconsultation;
        $consult = Consultation::create($data);
        return Response($consult);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation, $id)
    {
        $consultation = Consultation::findOrFail($id);
        return Response($consultation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->update($request->all());
        return Response($consultation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();
        return response()->json(['message' => 'Consultation supprimée avec succès']);

    }

    // Méthode pour ajouter un spécialiste à une consultation
    public function addSpecialiste(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->specialiste()->attach($request->input('idspecialiste'), ['tache' => $request->tache]);
        return response()->json(['message' => 'Spécialiste ajouté avec succès à la consultation']);
    }

    // Méthode pour supprimer un spécialiste d'une consultation
    public function removeSpecialiste(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->specialistes()->detach($request->idspecialiste);
        return response()->json(['message' => 'Spécialiste retiré avec succès de la consultation']);
    }

    public function addExamen(Request $request, $id)
    {
        // Récupérer la consultation
        $consultation = Consultation::findOrFail($id);

        // Récupérer l'identifiant de l'examen à associer
        $idExamen = $request->input('idExamen');

        // Ajouter l'examen à la consultation
        $consultation->examens()->attach($idExamen);

        return response()->json(['message' => 'Examen ajouté avec succès à la consultation']);
    }

    // Méthode pour supprimer un examen d'une consultation
    public function removeExamen(Request $request, $id)
    {
        // Récupérer la consultation
        $consultation = Consultation::findOrFail($id);

        // Récupérer l'identifiant de l'examen à dissocier
        $idExamen = $request->input('idExamen');

        // Supprimer l'examen de la consultation
        $consultation->examens()->detach($idExamen);

        return response()->json(['message' => 'Examen retiré avec succès de la consultation']);
    }
}
