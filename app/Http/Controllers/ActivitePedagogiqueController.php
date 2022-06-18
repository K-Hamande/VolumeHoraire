<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
use App\Models\Annee;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Formation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ActivitePedagogiqueController extends Controller
{

    public function NouvelleActivite()
    {
        return view('Activites.AjoutActivite');
    }


    public function ActiviteProgrammer()
    {
        return view('Activites.ActiviteProgrammer');
    }



    public function ActiviteTerminer()
    {
        return view('Activites.ActiviteTerminer');
    }



    public function EditActivite()
    {
        return view('Activites.EditActivite');
    }


    public function DeletActivite()
    {
        return view('Activites.DeletActivite');
    }



    // ======================= Formation =================


    public function Formation($id)
    {
        $Filiere = Filiere::findOrFail($id);
        $annee = Annee::all();
        return view('Formations.Formation',compact('Filiere','annee'));
    }

    public function FormationRegister(Request $request ,$id)
    {
        $Filiere = Filiere::findOrFail($id);
        $Formation = new Formation();
        $Niveau = new Niveau();
        $Formation->intituleFormation = $request->intituleFormation;
        $Formation->annee_id = $request->annee;
        $Formation->CodeFormation = $request->codeFormation;
        $Niveau->intituleNiveau = $request->choix;
        $Niveau->semestre = $request->choixSemestre;
        $First=Str::of($request->choix)->limit(1,'');
        $Last=Str::substr($request->choix,-1);
        $semestreFirst=Str::of($request->choixSemestre)->limit(1,'');
        $semestreLast=Str::substr($request->choixSemestre,-1);
        $Abreviation = $First.$Last.$semestreFirst. $semestreLast;
        $Niveau->abreviation = $Abreviation;
        $Niveau->save();
        $Formation->save();
        $Formation->Niveaux()->attach($Niveau);
        $Formation->Filieres()->attach($Filiere);
        return redirect('/ListFormation');
    }


    public function ListFormation()
    {
        $Formation = Formation::all();
        return view('Formations.ListFormation',compact('Formation'));
    }



    public function AjoutUE()
    {
        return view('Formations.AjouteUE');
    }



    public function EditFormation()
    {
        return view('Formations.EditFormation');
    }






public function Attribution()
{
    return view('pages.Attribution');
}


public function ListeAttribution()
{
    return view('pages.ListeAttribution');
}







}
