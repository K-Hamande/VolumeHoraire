<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtablissementController extends Controller
{
       // UFR

       public function Etablissement()
       {
           return view('Etablissement');
       }

   public function EtablissementRegister(Request $request)
   {
       return view('Etablissement');
   }





       // ==================== Departement ===============

       public function Departement()
       {
           return view('Departement');
       }

   public function DepartementRegister(Request $request)
   {
       return view('Departement');
   }

}
