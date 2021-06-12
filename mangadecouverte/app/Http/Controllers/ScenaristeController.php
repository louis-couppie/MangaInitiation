<?php

namespace App\Http\Controllers;

use App\Models\Scenariste;
use Illuminate\Http\Request;

class ScenaristeController extends Controller
{
    public function index()
    {
        $scenariste = new Scenariste();
	    $scenaristes = $scenariste->getAll();
	    return view('indexS',compact('scenaristes'));
    }
}
