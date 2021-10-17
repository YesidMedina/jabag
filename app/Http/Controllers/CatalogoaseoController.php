<?php

namespace App\Http\Controllers;
use App\Models\Aseo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoaseoController extends Controller
{
    //
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));
        $aseo=DB::table('aseos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');




        $aseo = Aseo::paginate(9);


         return view('aseous', compact('aseo'));
    }


}
