<?php

namespace App\Http\Controllers;
use App\Models\Peluquerium;
use Illuminate\Http\Request;

class CatalogopeluController extends Controller
{
    //
    public function index()
    {
        $peluqueria = Peluquerium::paginate(8);
         return view('peluqueria', compact('peluqueria'));
    }

}

