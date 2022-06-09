<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Enseignant extends Controller
{
    public function Permanent()
    {
        return view('Enseignants.Permanent');
    }

    public function Vacataire()
    {
        return view('Enseignants.Vacataire');
    }


    // public function AddEnseignant()
    // {
    //     return view('pages.EnseignantRegister');
    // }

    public function ListeEnseignant()
    {
        return view('Enseignants.ListeEnseignant');
    }

    public function EnseignantActivite()
    {
        return view('Enseignants.EnseignantActivite');
    }
}
