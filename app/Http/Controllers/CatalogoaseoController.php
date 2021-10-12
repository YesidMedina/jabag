<?php

namespace App\Http\Controllers;
use App\Models\AseoPersonal;
use Illuminate\Http\Request;

class CatalogoaseoController extends Controller
{
    //
    public function index()
    {
        $aseopersonal = AseoPersonal::paginate();
         return view('aseoPersonal', compact('aseopersonal'));
    }

}
