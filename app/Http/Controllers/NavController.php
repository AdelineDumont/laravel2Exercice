<?php

namespace App\Http\Controllers;
use App\Models\Parfum;
use App\Models\Marque;
use App\Models\Prix;


use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function liste()
    {
        $parfums = Parfum::all();
        return view('liste', ['parfums' => $parfums]);
    }

    public function parfum($id)
    {
        $parfum = Parfum::findOrFail($id);
        return view('parfum', ['parfum' => $parfum]);
    }

    public function addParfum()
    {
        $marques = Marque::all()->sortBy('nom');
        $prix = Prix::all();
        return view('addParfum', ['marques' => $marques, 'prix' => $prix]);
    }
}