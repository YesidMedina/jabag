<?php

namespace App\Http\Controllers;
use App\Models\Cosmetico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogocosmeController extends Controller
{
    //
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));
        $cosmeticos=DB::table('cosmeticos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');

        $cosmeticos = Cosmetico::paginate(9);
         return view('cosmetico', compact('cosmeticos'));
    }

}
