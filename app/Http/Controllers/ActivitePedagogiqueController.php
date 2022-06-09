<?php

namespace App\Http\Controllers;

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


    public function Formation()
    {
        return view('Formations.Formation');
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
}
