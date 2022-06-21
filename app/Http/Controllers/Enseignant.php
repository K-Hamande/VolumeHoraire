<?php

namespace App\Http\Controllers;

use App\Models\Ufr;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Enseignant extends Controller
{
    public function Permanent()
    {
        $Grade = Grade::all();
        $Ufr = Ufr::all();
        return view('Enseignants.Permanent',compact('Grade','Ufr'));
    }




    public function AddEnseignant(Request $request)
    {
        $Enseignant = new Enseignant();
        $Enseignant->nom = $request->nom;

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
