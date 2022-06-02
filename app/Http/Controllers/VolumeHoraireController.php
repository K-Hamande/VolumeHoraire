<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VolumeHoraireController extends Controller
{


    // gestion des utilisateur
    
    public function UserIndex()
    {
        $User  = User::all();
        return view('UserIndex',compact('User'));
    }

    public function CreateUser(Request $request)
    {
        
    $Users = new User;
    $Users->roles()->attach($request->cats);
    $Users->name = $request->name;
    $Users->prenom = $request->prenom;
    $Users->email = $request->email;
    $Users->telephone = $request->phone;
    $Users->sexe = $request->sexe;

    $Users->pseudo = $request->pseudo;
    
     if ($request->confirmPassword === $request->confirmPassword) 
    {
         
     $Users->password = Hash::make($request->password);
    }


    $Role = new Role();
    $Role->intituleRole = $request->intituleRole;
    $Role->save();
    $Users->save();
       
        return view('UserRegister');
    } 

    public function Create()
    {

        return view('UserRegister');
    } 



    // Etablissement 

    public function Etablissement()
    {
        return view('
        ')
    }

}
