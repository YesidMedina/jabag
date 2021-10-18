<?php

namespace App\Http\Controllers;

use App\Models\Cosmetico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CosmeticoController
 * @package App\Http\Controllers
 */
class CosmeticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $cosmeticos=DB::table('cosmeticos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc')
        ->paginate(5);

        return view('cosmetico.index', compact('cosmeticos', 'texto'))
            ->with('i', (request()->input('page', 1) - 1) * $cosmeticos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cosmetico = new Cosmetico();
        return view('cosmetico.create', compact('cosmetico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cosmetico::$rules);

        $cosmetico = new Cosmetico();


        if($request->hasFile('imagen')){
            $imagen = $request->file("imagen");
            $imagen->move('public/img', $imagen->getClientOriginalName());

            $cosmetico->imagen = $imagen->getClientOriginalName();
        }

        $cosmetico->nombreProducto = $request["nombreProducto"];
        $cosmetico->descripcion = $request["descripcion"];
        $cosmetico->precio = $request["precio"];
        $cosmetico->codigo = $request["codigo"];
        $cosmetico->save();

        return redirect()->route('cosmeticos.index')
            ->with('success', 'Cosmeticos created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cosmetico = Cosmetico::find($id);

        return view('cosmeticos.show', compact('cosmetico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cosmetico = Cosmetico::find($id);

        return view('cosmetico.edit', compact('cosmetico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cosmetico $cosmetico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cosmetico $cosmetico)
    {
        request()->validate(Cosmetico::$rules);

        $cosmetico->update($request->all());

        return redirect()->route('cosmeticos.index')
            ->with('success', 'Cosmetico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cosmetico = Cosmetico::find($id)->delete();

        return redirect()->route('cosmeticos.index')
            ->with('success', 'Cosmetico deleted successfully');
    }
}
