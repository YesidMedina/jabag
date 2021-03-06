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

    public function detailcosmetico($id=null){
        $cosmetico = DB::table('cosmeticos')->where('id',$id)->first();

        return view ('detalle.detailcosmetico',compact('cosmetico'));

    }

    public function store(Request $request){

        //$barberia = DB::table('barberia')->where('nombreProducto',$request['texto'])->first();

        $texto=trim($request->get('texto'));

        $cosmeticos=DB::table('cosmeticos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->get();

        // var_dump($barberia);
        // die();


        // return redirect()->route('barberia.index',array(
        //    'texto'=> $barberia,
        //    'buscar'=>'barberia',
        //    'texto'=> $barberia
        // ))->with('info','mensaje enviado');

     return  view ('cosmetico',compact('cosmeticos'));

}
}
