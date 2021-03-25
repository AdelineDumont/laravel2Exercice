<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parfum;

class ActionController extends Controller
{
    public function addParfum(Request $request) {
        $parfum = new Parfum;
        $parfum->nom = $request->nom;
        $parfum->marque = $request->marque;
        $parfum->prix = $request->prix;
        $parfum->save();
        $parfum->marques()->attach($request->marques);
        return redirect('/list');
    }
}