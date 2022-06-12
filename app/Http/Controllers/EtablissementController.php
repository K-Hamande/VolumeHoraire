<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
       // UFR

       public function Etablissement()
       {
           return view('Etablissement.Etablissement');
       }

        public function EtablissementRegister(Request $request)
        {
            $Ufr = new Ufr();
            $Ufr->intitule = $request->intitule;
            $Ufr->sigle = $request->sigle;
            $Ufr->save();
       
            return view('Etablissement.Etablissement');
        }



        public function ListEtablissement()
        {
            $ListEtablissement = Ufr::all();
            return view('Etablissement.ListEtablissement',compact('ListEtablissement'));
        }

        
        public function DeletEtablissement($id)
        {
            $Etablissement = Ufr::find($id);
            $Etablissement->delete();
            return redirect('/ListEtablissement');
        }

        public function EditEtablissement($id)
        {
            $Etablissement = Ufr::find($id);
            return view('Etablissement.EditEtablissement',compact('Etablissement'));
        }


        public function UpdatEtablissement(Request $request ,$id)
        {
            $Ufr =  Ufr::find($id);
            $Ufr->intitule = $request->intitule;
            $Ufr->sigle = $request->sigle;
            $Ufr->update();
       
            return redirect('/ListEtablissement');

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
