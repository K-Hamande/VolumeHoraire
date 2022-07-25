<?php

namespace App\Http\Controllers;

use App\Models\Attribution;
use App\Models\Ufr;
use App\Models\Grade;
use App\Models\Permanent;
use App\Models\Vacataire;
use Illuminate\Http\Request;
use App\Models\Responsabilite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Enseignant extends Controller
{

    // ==================== permanent  ===============
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



  // ==================== Vacataire  ===============

    public function Vacataire()
    {
        $Etablissement = Ufr::all();
        return view('Enseignants.Vacataire',compact('Etablissement'));
    }

      

    public function VacataireRegister(Request $request)
    {

        $request->validate([
        'nom' => 'required|max:255',
        'prenom' => 'required|max:255',
        'telephone' => 'required|numeric|unique:vacataires| min:8',
        'autorisation' => 'required|alpha_num|unique:vacataires',
        'email'  => 'required|email|unique:vacataires',
        'cnib'  => 'required|alpha_num|unique:vacataires',
        'fichier' => 'required|mimes:pdf|max:2048'
        ]);
        $Vacataire = new Vacataire();
        $Vacataire->nom = $request->nom;
        $Vacataire->prenom = $request->prenom;
        $Vacataire->telephone = $request->telephone;
        $Vacataire->email = $request->email;
        $Vacataire->cnib = $request->cnib;
        $Vacataire->ufr_id = $request->etabissement;
        $Vacataire->autorisation = $request->autorisation;
        $fileNameWithExt = $request->file('fichier')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $filExtension = $request->file('fichier')->getClientOriginalExtension();
        $autorisationFile = $fileName.'_'.time().'.'.$filExtension;
        $path = $request->file('fichier')->storeAs('public/listeAutorisation',$autorisationFile);
        $Vacataire->file = $autorisationFile;
        $Vacataire->save();
        return  Redirect('/Vacataire')->with('Message','enregistrement a été effectué avec succès');
         
    }

    

    public function ListeEnseignant()
    {
        $Permanent = Permanent::all();
        $Vacataire = Vacataire::all();
        return view('Enseignants.ListeEnseignant' ,compact('Permanent','Vacataire'));
    }

    public function EnseignantActivite()
    {
        return view('Enseignants.EnseignantActivite');
    }

    public function EditVacataire($id)
     {
          $Vacataire = Vacataire::findOrFail($id);
          return view('Enseignants.EditVacataire',compact('Vacataire'));
     }
   
    public function DetailVacataire($id)
     {
          $Vacataire = Vacataire::findOrFail($id);
          return view('Enseignants.DetailVacataire',compact('Vacataire'));
     }
   
   
      public function UpdatVacataire(Request $request ,$id)
      {
          $Vacataire =  Vacataire::findOrFail($id);
          $Vacataire->intituleVacataire = $request->intitule;
          $Vacataire->update();
     
          return redirect('/ListVacataire');
      }

      public function DeletVacataire($id)
      {
          $Vacataire = Vacataire::findOrFail($id);
          $Vacataire->delete();
          return redirect('/ListVacataire');
      }




    public function DetailPermanent($id)
     {
          $Permanent = Permanent::findOrFail($id);
          return view('Enseignants.DetailPermanent',compact('Permanent'));
     }
    public function EditPermanent($id)
     {
          $Permanent = Permanent::findOrFail($id);
          return view('Enseignants.EditPermanent',compact('Permanent'));
     }
   
   
      public function UpdatPermanent(Request $request ,$id)
      {
          $Permanent =  Permanent::findOrFail($id);
          $Permanent->intitulePermanent = $request->intitule;
          $Permanent->update();
     
          return redirect('/ListPermanent');
      }

      public function DeletPermanent($id)
      {
          $Permanent = Permanent::findOrFail($id);
          $Permanent->delete();
          return redirect('/ListeEnseignant');
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
                $Liste = Responsabilite::all();
                return view('Responsabilites.ListResponsabilite',compact('Liste'));
            }
   
      public function ResponsabiliteRegister(Request $request)
          {

            $request->validate([
                'intituleResponsabilite' => 'required|unique:responsabilites|max:255',

                'abattement'=> 'required|numeric|min:2'

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



      //========================= Attribution ============================
      public function Attribution()
      {
        $Permanent = Permanent::whereNull('attribution_id')->get();
        return view('Attributions.Attribution' ,compact('Permanent'));
      }

      public function ListeAttribution()
      {
        $Permanent = Permanent::whereNotNull('attribution_id')->get();
        return view('Attributions.ListeAttribution' ,compact('Permanent'));
      }

      public function NewAttribution($id)
      {
        $Permanent = Permanent::findOrFail($id);
        return view('Attributions.NewAttribution',compact('Permanent'));
      }

       public function DetailAttribution($id)
       {
        
        $Permanent = Permanent::findOrFail($id);
         return view('Attributions.DetailAttribution',compact('Permanent',));
       }


      public function UpdatAttribution(Request $request , $id)
      {
        $Permanent = Attribution::FindOrFail($id);
        $Responsabilite = Responsabilite::findOrFail($request->idReponsabilite);
        $typeAbattement = $Responsabilite['typeAbattement']; 
        $abattement = $Responsabilite['abattement']; 
        $request->validate([
            'CoursMagistral' => 'required|numeric|min:2',

            'TravauxDiriges'=> 'required|numeric|min:2'

        ]);
           $Attribution = new Attribution();
           $Attribution->VH_CoursMagistral = $request->CoursMagistral;
            $Attribution->VH_TravauxDiriges = $request->TravauxDiriges;
            if ($typeAbattement == "Pourcentage(%)" )
             {
                    if ($abattement == 0) 
                    {
                        $Attribution->CM_ApresAbattement =  $request->CoursMagistral;
                        $Attribution->TD_ApresAbattement =  $request->TravauxDiriges;
                    } 
                    else
                     {
                        $Attribution->CM_ApresAbattement = ($request->CoursMagistral * $abattement) / 100 ;
                        $Attribution->TD_ApresAbattement = ($request->TravauxDiriges * $abattement) / 100 ;
                    }
            }
            else
            {
                $Attribution->CM_ApresAbattement = ($request->CoursMagistral - $abattement) ;
                $Attribution->TD_ApresAbattement = ($request->TravauxDiriges - $abattement) ;
            }
            $Attribution->Estimation = $Attribution->CM_ApresAbattement + $Attribution->TD_ApresAbattement;
            $Attribution->VTD_confie = 0 ;
            $Attribution->VCM_confie = 0 ;
           $Attribution->save();
           $Permanent->attribution_id = $Attribution->id;
           $Permanent->update();
            return redirect('/Attribution')->with('Message','enregistrement a été effectué avec succès') ;
      }
      public function AttributionRegister(Request $request , $id)
      {
        $Permanent = Permanent::FindOrFail($id);
        $Responsabilite = Responsabilite::findOrFail($request->idReponsabilite);
        $typeAbattement = $Responsabilite['typeAbattement']; 
        $abattement = $Responsabilite['abattement']; 
        $request->validate([
            'CoursMagistral' => 'required|numeric|min:2',

            'TravauxDiriges'=> 'required|numeric|min:2'

        ]);
           $Attribution = new Attribution();
           $Attribution->VH_CoursMagistral = $request->CoursMagistral;
            $Attribution->VH_TravauxDiriges = $request->TravauxDiriges;
            if ($typeAbattement == "Pourcentage(%)" )
             {
                    if ($abattement == 0) 
                    {
                        $Attribution->CM_ApresAbattement =  $request->CoursMagistral;
                        $Attribution->TD_ApresAbattement =  $request->TravauxDiriges;
                    } 
                    else
                     {
                        $Attribution->CM_ApresAbattement = ($request->CoursMagistral * $abattement) / 100 ;
                        $Attribution->TD_ApresAbattement = ($request->TravauxDiriges * $abattement) / 100 ;
                    }
            }
            else
            {
                $Attribution->CM_ApresAbattement = ($request->CoursMagistral - $abattement) ;
                $Attribution->TD_ApresAbattement = ($request->TravauxDiriges - $abattement) ;
            }
            $Attribution->Estimation = $Attribution->CM_ApresAbattement + $Attribution->TD_ApresAbattement;
            $Attribution->VTD_confie = 0 ;
            $Attribution->VCM_confie = 0 ;
           $Attribution->save();
           $Permanent->attribution_id = $Attribution->id;
           $Permanent->update();
            return redirect('/Attribution')->with('Message','enregistrement a été effectué avec succès') ;
      }

   
}
