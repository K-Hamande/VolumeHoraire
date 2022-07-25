<?php

namespace App\Http\Controllers;

use App\Models\Ue;
use App\Models\Ufr;
use App\Models\Ecue;
use App\Models\Annee;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Formation;
use App\Models\Permanent;
use App\Models\Attribution;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ActivitePedagogiqueController extends Controller
{

    public function NouvelleActivite()
    {
        $annee = Annee::all();
        $Formation = Formation::all();
        //dd($Formation);
        $Permanent = Permanent::whereNotNull('attribution_id')->get();
        return view('Activites.AjoutActivite',compact('annee','Permanent','Formation'));
    }


    public function ActiviteProgrammer()
    {
        return view('Activites.ActiviteProgrammer');
    }



    public function ActiviteTerminer()
    {
        return view('Activites.ActiviteTerminer');
    }



    public function EditActivite()
    {
        return view('Activites.EditActivite');
    }


    public function DeletActivite()
    {
        return view('Activites.DeletActivite');
    }



    // ======================= Formation =================


    public function Formation($id)
    {
        $Filiere = Filiere::findOrFail($id);
        $annee = Annee::all();
        return view('Formations.Formation',compact('Filiere','annee'));
    }

    public function FormationRegister(Request $request ,$id)
    {
        $Filiere = Filiere::findOrFail($id);
        $Formation = new Formation();
        $Niveau = new Niveau();
        $Formation->intituleFormation = $request->intituleFormation;
        $Formation->annee_id = $request->annee;
        $Formation->CodeFormation = $request->codeFormation;
        $Niveau->intituleNiveau = $request->choix;
        $Niveau->semestre = $request->choixSemestre;
        $First=Str::of($request->choix)->limit(1,'');
        $Last=Str::substr($request->choix,-1);
        $semestreFirst=Str::of($request->choixSemestre)->limit(1,'');
        $semestreLast=Str::substr($request->choixSemestre,-1);
        $Abreviation = $First.$Last.$semestreFirst. $semestreLast;
        $Niveau->abreviation = $Abreviation;
        $Niveau->save();
        $Formation->save();
        $Formation->Niveaux()->attach($Niveau);
        $Formation->Filieres()->attach($Filiere);
        return redirect('/ListFormation');
    }


    public function ListFormation()
    {
        $Formation = Formation::all();
        return view('Formations.ListFormation',compact('Formation'));
    }


    public function Detail($id)
    {
      $Attribution = Attribution::findOrFail($id);
      $Permanent = Permanent::findOrFail($id);
      return view('Attributions.Detail',compact('Attribution','Permanent',));
    }



    public function DetailFormation($id)
    {
       $Formation = Formation::findOrFail($id);
       return view('Formations.DetailFormation',compact('Formation'));
    }

    public function UpdatFormation(Request $request ,$id)
    {
       $Formation = Formation::findOrFail($id);
       $Formation->intituleFormation = $request->intituleFormation;
       $Formation->codeFormation = $request->codeFormation;
       $Formation->update();
     return redirect('/ListFormation');
    }


    public function AddFormationUe($id)
    {
        $Formation = Formation::findOrFail($id);
        $Filiere = Filiere::all();
        return view('Formations.AddFormationUe',compact('Formation','Filiere'));
    }


    public function AddUe(Request $request , $id)
    {
        $Ue = $request->ue;
        $Formation = Formation::findOrFail($id);
        $Formation->ues()->attach($Ue);
        return redirect('/ListFormation');

    }

    public function AddList()
    {
        $Formation= Formation::all();
        return view('Formations.AddList',compact('Formation'));
    }






public function Attribution()
{
    return view('pages.Attribution');
}


public function ListeAttribution()
{
    return view('pages.ListeAttribution');
}




//      // ==================== Responsabilite ===============

//      public function Responsabilite()
//      {
      
//          return view('Responsabilites.Responsabilite');
//      }

     

//       public function ListResponsabilite()
//        {
//            $Liste =Responsabilite::all();
//            return view('Responsabilites.ListResponsabilite',compact('Liste'));
//        }

//  public function ResponsabiliteRegister(Request $request)
//      {

//        $request->validate([
//            'intituleResponsabilite' => 'required|unique:responsabilites|max:255',

//            'abattement'=> 'required|numeric|min:2'

//        ]);
//           $Responsabilite = new TypeActivite();
//           $Responsabilite->intituleResponsabilite = $request->intituleResponsabilite;
//            $Responsabilite->typeAbattement = $request->type;
//            $Responsabilite->abattement = $request->abattement;
//           $Responsabilite->save();
//            return redirect('/Responsabilite')->with('Message','enregistrement a été effectué avec succès') ;
//       }

// public function EditTypeActivite($id)
// {
//      $TypeActivite = TypeActivite::findOrFail($id);
//      return view('TypeActivites.EditTypeActivite',compact('TypeActivite'));
// }


//  public function UpdatTypeActivite(Request $request ,$id)
//  {
//      $TypeActivite =  TypeActivite::findOrFail($id);
//      $TypeActivite->intituleTypeActivite = $request->intitule;
//      $TypeActivite->update();

//      return redirect('/ListTypeActivite');
//  }

//  public function DeletTypeActivite($id)
//  {
//      $TypeActivite = TypeActivite::findOrFail($id);
//      $TypeActivite->delete();
//      return redirect('/ListTypeActivite');
//  }


}
