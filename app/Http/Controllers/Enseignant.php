<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Enseignant extends Controller
{
    public function Enseignant()
    {
        return view('pages.Enseignant');
    }


    public function AddEnseignant()
    {
        return view('pages.EnseignantRegister');
    }

    public function ListeEnseignant()
    {
        return view('pages.ListeEnseignant');
    }

    public function EnseignantActivite()
    {
        return view('pages.EnseignantActivite');
    }
}
