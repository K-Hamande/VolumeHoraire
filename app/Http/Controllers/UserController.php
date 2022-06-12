<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    // gestion des utilisateur
    
    public function UserIndex()
    {
        $AllUsers  = User::all();
        return view('pages.UserIndex',compact('AllUsers'));
    }

    public function CreateUser(Request $request)
    {
        
    $Users = new User;
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
    //dd($Users);
    $Role->save();
    $Users->save();
    $Users->Roles()->attach($Role);
    
       
        return view('pages.UserRegister');
    } 

    public function Create()
    {

        return view('pages.UserRegister');
    }



    public function UpdatUser($id)
    {
        $User = User::find($id);
        //dd($User);
        return view('pages.UpdatUser', compact('User'));
    }




    public function DeletUser($id)
    {
        $User = User::find($id);
        $User->delete();
    }
}
