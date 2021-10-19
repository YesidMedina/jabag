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


        $texto=trim($request->get('texto'));
        $productos=DB::table('productos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');

        $productos = DB::table('productos')->paginate(9);
        return view('welcome', compact('productos', 'texto'))
        ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());



    }

    public function detailproductos($id=null){
        $producto = DB::table('productos')->where('id',$id)->first();
        //  return view ('detailbarberia',[
        //      'barberia'=> $barberia
        //  ]);
        return view ('detalle.detailproductos',compact('producto'));

    }

    // public function show($id)
    // {
    //     $producto = Producto::find($id);

    //     return view('welcomeshow', compact('producto'));
    // }

    public function store(Request $request){

        //$barberia = DB::table('barberia')->where('nombreProducto',$request['texto'])->first();

        $texto=trim($request->get('texto'));

        $productos=DB::table('productos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->get();

        // var_dump($barberia);
        // die();


        // return redirect()->route('barberia.index',array(
        //    'texto'=> $barberia,
        //    'buscar'=>'barberia',
        //    'texto'=> $barberia
        // ))->with('info','mensaje enviado');

     return  view ('welcome',compact('productos'));

}


}
