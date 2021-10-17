<?php

namespace App\Http\Controllers;
use App\Models\Peluquerium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogopeluController extends Controller
{
    //
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));
        $peluqueria=DB::table('peluqueria')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');

        $peluqueria = Peluquerium::paginate(9);
         return view('peluqueria', compact('peluqueria'));
    }

}

