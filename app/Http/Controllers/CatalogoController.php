<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    //
    public function index(Request $request)
    {

        $productos = Producto::paginate(5);


         return view('welcome', compact('productos'));
    }

}


