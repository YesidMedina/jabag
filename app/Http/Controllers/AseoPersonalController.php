<?php

namespace App\Http\Controllers;

use App\Models\AseoPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class AseoPersonalController
 * @package App\Http\Controllers
 */
class AseoPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $aseoPersonal=DB::table('aseopersonal')->select('id', 'nombreProducto', 'codigo', 'precio', 'descripcion', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc')
        ->paginate(5);


        return view('aseoPersonal.index', compact('aseoPersonal', 'texto'))
            ->with('i', (request()->input('page', 1) - 1) * $aseoPersonal->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aseopersonal = new Aseopersonal();
        return view('aseoPersonal.create', compact('aseoPersonal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aseopersonal::$rules);

        $aseoPersonal = AseoPersonal::create($request->all());

        return redirect()->route('aseoPersonal.index')
            ->with('success', 'AseoPersonal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aseoPersonal = AseoPersonal::find($id);

        return view('aseoPersonal.show', compact('aseoPersonal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aseoPersonal = AseoPersonal::find($id);

        return view('aseoPersonal.edit', compact('aseoPersonal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AseoPersonal $aseoPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AseoPersonal $aseoPersonal)
    {
        request()->validate(AseoPersonal::$rules);

        $aseoPersonal->update($request->all());

        return redirect()->route('aseoPersonal.index')
            ->with('success', 'AseoPersonal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aseoPersonal = AseoPersonal::find($id)->delete();

        return redirect()->route('aseopersonal.index')
            ->with('success', 'AseoPersonal deleted successfully');
    }
}
