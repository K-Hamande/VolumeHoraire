<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
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
        $Etablissement = Ufr::findOrFail($id);
        return view('Formations.Formation',compact('Etablissement'));
    }


    public function ListeFormation()
    {
        return view('Formations.ListeFormation');
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
