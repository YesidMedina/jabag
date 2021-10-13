<?php

namespace App\Http\Controllers;
use App\Models\Barberium;
use Illuminate\Http\Request;

class CatalogobarberController extends Controller
{
    //
    public function index()
    {
        $barberias = Barberium::paginate(8);
         return view('barberia', compact('barberias'));
    }

}

