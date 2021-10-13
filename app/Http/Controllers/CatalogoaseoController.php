<?php

namespace App\Http\Controllers;
use App\Models\AseoPersonal;
use Illuminate\Http\Request;

class CatalogoaseoController extends Controller
{
    //
    public function index()
    {
        $aseoPersonal = AseoPersonal::paginate(8);
         return view('aseopersonal', compact('aseoPersonal'));
    }

}
