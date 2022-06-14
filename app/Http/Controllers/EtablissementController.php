<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
use App\Models\Filiere;
use App\Models\Departement;
use App\Models\Ue;
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
        $ListEtablissement = Ufr::all();
           return view('Departements.Departement' ,compact('ListEtablissement'));
       }

        public function DepartementRegister(Request $request )
        {

            $Departement = new Departement();
            $Departement->intituleDepartement = $request->intitule;
            $Departement->ufr_id = $request->choixDep;
            $Departement->save();
            return redirect('/Departement');
        }


        public function ListeDepartement()
        {

            $ListeDepartement = Departement::all();
            return view('Departements.ListDepartement',compact('ListeDepartement'));
        }


        public function UpdatDepartement(Request $request ,$id)
        {
            $Departement =  Departement::find($id);
            $Departement->intituleDepartement = $request->intitule;
            $Departement->ufr_id = $request->choix;
            $Departement->update();
       
            return redirect('/ListeDepartement');

        }


        public function DeletDepartement($id)
        {
            $Departement = Departement::find($id);
            $Departement->delete();
            return redirect('/ListeDepartement');
        }


        public function EditDepartement($id)
        {
             $Departement = Departement::findOrFail($id);
             $Etablissement = Ufr::all();
             return view('Departements.EditDepartement',compact('Departement','Etablissement'));
        }

   
       // ==================== flière ===============

       public function Filiere()
       {
        $Liste = Departement::all();
           return view('Filieres.filiere',compact('Liste'));
       }

       

       public function ListFiliere()
        {
            $Liste =Filiere::all();
            return view('Filieres.ListFiliere',compact('Liste'));
        }

    public function FiliereRegister(Request $request)
       {
            $Filiere = new Filiere();
            $Filiere->intituleFiliere = $request->intitule;
            $Filiere->departement_id = $request->choixDep;
            $Filiere->save();
            return redirect('/Filiere');
        }

   public function EditFiliere($id)
   {
        $Filiere = Filiere::findOrFail($id);
        $Departement = Departement::all();
        return view('Filieres.EditFiliere',compact('Filiere','Departement'));
   }


   public function UpdatFiliere(Request $request ,$id)
   {
       $Filiere =  Filiere::findOrFail($id);
       $Filiere->intituleFiliere = $request->intitule;
       $Filiere->departement_id = $request->choix;
       $Filiere->update();
  
       return redirect('/ListFiliere');
   }

       // ==================== UE ===============

       public function UE()
       {
           return view('UE.ue');
       }



        public function UERegister(Request $request)
        {
            $UE = new  Ue();
            $UE->intituleUE = $request->ue;
            $UE->creditUE = $request->credit;
            $UE->save();
            return view('UE.ue');

        }

        public function ListUe()
        {
            $Liste = Ue::all();
            return view('UE.ListUe',compact('Liste'));
        }

        public function EditUe($id)
        {
            $UE = Ue::findOrFail($id);
            return view('UE.EditUe',compact('UE') );
        }


        public function UpdatUe(Request $request,$id)
        {
            $UE = Ue::findOrFail($id);
            $UE->intituleUE = $request->ue;
            $UE->creditUE = $request->credit;
            $UE->update();
            return redirect('/ListUe');
        }


        public function DeletUe($id)
        {
            $UE = Ue::findOrFail($id);
            $UE->delete();
            return redirect('/ListUe');
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
