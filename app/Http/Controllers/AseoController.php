<?php

namespace App\Http\Controllers;

use App\Models\Aseo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class AseoController
 * @package App\Http\Controllers
 */
class AseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $aseos=DB::table('aseos')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc')
        ->paginate(8);

        return view('aseo.index', compact('aseos','texto'))
            ->with('i', (request()->input('page', 1) - 1) * $aseos->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aseo = new Aseo();
        return view('aseo.create', compact('aseo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aseo::$rules);

        $aseo = new Aseo();

        if($request->hasFile('imagen')){
            $imagen = $request->file("imagen");
            $imagen->move('public/img', $imagen->getClientOriginalName());

            $aseo->imagen = $imagen->getClientOriginalName();
        }

        $aseo->nombreProducto = $request["nombreProducto"];
        $aseo->descripcion = $request["descripcion"];
        $aseo->precio = $request["precio"];
        $aseo->codigo = $request["codigo"];
        $aseo->save();

        return redirect()->route('aseo.index')
            ->with('success', 'Aseo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aseo = Aseo::find($id);

        return view('aseo.show', compact('aseo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aseo = Aseo::find($id);

        return view('aseo.edit', compact('aseo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aseo $aseo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aseo $aseo)
    {
        request()->validate(Aseo::$rules);

        $aseo->update($request->all());

        return redirect()->route('aseo.index')
            ->with('success', 'Aseo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aseo = Aseo::find($id)->delete();

        return redirect()->route('aseo.index')
            ->with('success', 'Aseo deleted successfully');
    }
}
