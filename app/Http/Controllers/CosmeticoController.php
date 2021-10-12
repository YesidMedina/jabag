<?php

namespace App\Http\Controllers;

use App\Models\Cosmetico;
use Illuminate\Http\Request;

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
    public function index()
    {
        $cosmeticos = Cosmetico::paginate();

        return view('cosmetico.index', compact('cosmeticos'))
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

        $cosmetico = Cosmetico::create($request->all());

        return redirect()->route('cosmeticos.index')
            ->with('success', 'Cosmetico created successfully.');
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

        return view('cosmetico.show', compact('cosmetico'));
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