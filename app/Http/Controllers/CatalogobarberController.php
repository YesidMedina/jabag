<?php

namespace App\Http\Controllers;
use App\Models\Barberium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogobarberController extends Controller
{
    //
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));
        $barberias=DB::table('barberia')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');


        $barberias = Barberium::paginate(9);
         return view('barberia', compact('barberias', 'texto'));
    }
    
    public function detailbarber($id=null){
        $barberia = DB::table('barberia')->where('id',$id)->first();
        //  return view ('detailbarberia',[
        //      'barberia'=> $barberia
        //  ]);
        return view ('detalle.detailbarberia',compact('barberia'));
    
    }

}

