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

    public function detailpeluqueria($id=null){
        $peluqueria = DB::table('peluqueria')->where('id',$id)->first();
        //  return view ('detailbarberia',[
        //      'barberia'=> $barberia
        //  ]);
        return view ('detalle.detailpeluqueria',compact('peluqueria'));

    }

    public function store(Request $request){

        //$barberia = DB::table('barberia')->where('nombreProducto',$request['texto'])->first();

        $texto=trim($request->get('texto'));

        $peluqueria=DB::table('peluqueria')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->get();

        // var_dump($barberia);
        // die();


        // return redirect()->route('barberia.index',array(
        //    'texto'=> $barberia,
        //    'buscar'=>'barberia',
        //    'texto'=> $barberia
        // ))->with('info','mensaje enviado');

     return  view ('peluqueria',compact('peluqueria'));

}

}
