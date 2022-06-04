<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtablissementController extends Controller
{
       // UFR

       public function Etablissement()
       {
           return view('pages.Etablissement');
       }

        public function EtablissementRegister(Request $request)
        {
            return view('pages.Etablissement');
        }



       // ==================== Departement ===============

       public function Departement()
       {
           return view('pages.Departement');
       }

        public function DepartementRegister(Request $request)
        {
            return view('pages.Departement');
        }



   
       // ==================== flière ===============

       public function fliere()
       {
           return view('pages.fliere');
       }

   public function fliereRegister(Request $request)
   {
       return view('pages.fliere');
   }




       // ==================== UE ===============

       public function ue()
       {
           return view('pages.ue');
       }



        public function ueRegister(Request $request)
        {
            return view('pages.ue');
        }



       // ==================== matier ===============

       public function matiere()
       {
           return view('pages.matiere');
       }



        public function matiereRegister(Request $request)
        {
            return view('pages.matiere');
        }
    
}
