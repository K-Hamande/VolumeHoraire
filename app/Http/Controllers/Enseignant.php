<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
use App\Models\Grade;
use App\Models\Permanent;
use Illuminate\Http\Request;
use App\Models\Responsabilite;
use Illuminate\Support\Facades\Redirect;

class Enseignant extends Controller
{
    public function Permanent()
    {
        $Grade = Grade::all();
        $Ufr = Ufr::all();
        $Responsabilite = Responsabilite::all();
        return view('Enseignants.Permanent',compact('Grade','Ufr','Responsabilite'));
    }




    public function PermanentRegister(Request $request)
    {

        $request->validate([
        'nom' => 'required|max:255',
        'prenom' => 'required|max:255',
        'telephone' => 'required|numeric|unique:permanents| min:8',
        'matricule' => 'required|alpha_num|unique:permanents',
        'email'  => 'required|email|unique:permanents',
        ]);

        $Permanent = new Permanent();
        $Permanent->nom = $request->nom;
        $Permanent->prenom = $request->prenom;
        $Permanent->telephone = $request->telephone;
        $Permanent->matricule = $request->matricule;
        $Permanent->email = $request->email;
        $Permanent->grade_id = $request->grade;
        $Permanent->ufr_id = $request->ufr;
        $Permanent->responsabilite_id = $request->responsabilite;
        $Permanent->save();
        return  Redirect('/Permanent')->with('Message','enregistrement a été effectué avec succès');
    }



    public function Vacataire()
    {
        return view('Enseignants.Vacataire');
    }


    

    public function ListeEnseignant()
    {
        return view('Enseignants.ListeEnseignant');
    }

    public function EnseignantActivite()
    {
        return view('Enseignants.EnseignantActivite');
    }



          // ==================== Grade ===============

          public function Grade()
          {
           
              return view('Grades.Grade');
          }
   
          
   
           public function ListGrade()
            {
                $Liste =Grade::all();
                return view('Grades.ListGrade',compact('Liste'));
            }
   
      public function GradeRegister(Request $request)
          {
               $Grade = new Grade();
               $Grade->intituleGrade = $request->intitule;
               $Grade->save();
                return redirect('/Grade');
           }
   
     public function EditGrade($id)
     {
          $Grade = Grade::findOrFail($id);
          return view('Grades.EditGrade',compact('Grade'));
     }
   
   
      public function UpdatGrade(Request $request ,$id)
      {
          $Grade =  Grade::findOrFail($id);
          $Grade->intituleGrade = $request->intitule;
          $Grade->update();
     
          return redirect('/ListGrade');
      }

      public function DeletGrade($id)
      {
          $Grade = Grade::findOrFail($id);
          $Grade->delete();
          return redirect('/ListGrade');
      }
          // ==================== Responsabilite ===============

          public function Responsabilite()
          {
           
              return view('Responsabilites.Responsabilite');
          }
   
          
   
           public function ListResponsabilite()
            {
                $Liste =Responsabilite::all();
                return view('Responsabilites.ListResponsabilite',compact('Liste'));
            }
   
      public function ResponsabiliteRegister(Request $request)
          {

            $request->validate([
                'intituleResponsabilite' => 'required|unique:responsabilites|max:255',

                'abattement'=> 'required|unique:responsabilites'

            ]);
               $Responsabilite = new Responsabilite();
               $Responsabilite->intituleResponsabilite = $request->intituleResponsabilite;
                $Responsabilite->typeAbattement = $request->type;
                $Responsabilite->abattement = $request->abattement;
               $Responsabilite->save();
                return redirect('/Responsabilite')->with('Message','enregistrement a été effectué avec succès') ;
           }
   
     public function EditResponsabilite($id)
     {
          $Responsabilite = Responsabilite::findOrFail($id);
          return view('Responsabilites.EditResponsabilite',compact('Responsabilite'));
     }
   
   
      public function UpdatResponsabilite(Request $request ,$id)
      {
          $Responsabilite =  Responsabilite::findOrFail($id);
          $Responsabilite->intituleResponsabilite = $request->intitule;
          $Responsabilite->update();
     
          return redirect('/ListResponsabilite');
      }

      public function DeletResponsabilite($id)
      {
          $Responsabilite = Responsabilite::findOrFail($id);
          $Responsabilite->delete();
          return redirect('/ListResponsabilite');
      }

   
}
