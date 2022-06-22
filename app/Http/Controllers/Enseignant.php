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
        return view('Enseignants.Permanent',compact('Grade','Ufr'));
    }




    public function PermanentRegister(Request $request)
    {
        $Responsabilite = new Responsabilite();
        $Permanent = new Permanent();
        $Permanent->nom = $request->nom;
        $Permanent->prenom = $request->prenom;
        $Permanent->telephone = $request->telephone;
        $Permanent->matricule = $request->matricule;
        $Permanent->email = $request->email;
        $Permanent->grade_id = $request->grade;
        $Permanent->ufr_id = $request->ufr;
        $Responsabilite->intituleResponsabilite = $request->responsabilite;
        $Responsabilite->typeAbattement = $request->type;
        $Responsabilite->abattement = $request->abattement;
        $Permanent->responsabilite()->associate($Permanent);
        $Responsabilite->save();
        dd($Permanent);
        $Permanent->save();
        return  Redirect('/Permanent');
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

   
}
