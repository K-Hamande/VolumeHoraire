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

       public function Filiere()
       {
           return view('pages.filiere');
       }

   public function FiliereRegister(Request $request)
   {
       return view('pages.filiere');
   }




       // ==================== UE ===============

       public function UE()
       {
           return view('pages.ue');
       }



        public function UERegister(Request $request)
        {
            return view('pages.ue');
        }



       // ==================== ECUE ===============

       public function Ecue()
       {
           return view('pages.Ecue');
       }



        public function EcueRegister(Request $request)
        {
            return view('pages.Ecue');
        }
    
}
