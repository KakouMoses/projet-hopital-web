<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Services\IdentifiantService;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(Examen::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idexam = IdentifiantService::genererIdentifiant('EX-') ;
        $data = $request->all();
        $data['idexam'] = $idexam;
        $exam = Examen::create($data);
        return Response($exam);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen, $id)
    {
        $examen = Examen::findOrFail($id);
        return Response($examen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen, $id)
    {
        $examen = Examen::findOrFail($id);
        $examen->update($request->all());
        return Response($examen);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen, $id)
    {
        $examen = Examen::findOrFail($id);
        $examen->delete();
        return Response()->json(['message' => 'Examen supprimé avec succès !']);
    }
}
