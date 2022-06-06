<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitePedagogiqueController extends Controller
{
    public function Formation()
    {
        return view('pages.Formation');
    }


    public function AjoutFormation()
    {
        return view('pages.AjoutFormation');
    }
}
