<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cursuri;

class CursController extends Controller
{
    public function submit(Request $req){
        $curs = new cursuri();
        $curs->eur=$req->input('eur');
        $curs->mld=$req->input('mld');
        $curs->dol=$req->input('dol');
        $curs->ron=$req->input('ron');
        $curs->data=$req->input('data');
        $curs->save();
            return redirect()->route('home');
    }
    function list(){
        return cursuri::all();
    }
}
