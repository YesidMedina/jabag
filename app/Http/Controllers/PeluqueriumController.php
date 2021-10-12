<?php

namespace App\Http\Controllers;

use App\Models\Peluquerium;
use Illuminate\Http\Request;

/**
 * Class PeluqueriumController
 * @package App\Http\Controllers
 */
class PeluqueriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peluqueria = Peluquerium::paginate();

        return view('peluquerium.index', compact('peluqueria'))
            ->with('i', (request()->input('page', 1) - 1) * $peluqueria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peluquerium = new Peluquerium();
        return view('peluquerium.create', compact('peluquerium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Peluquerium::$rules);

        $peluquerium = Peluquerium::create($request->all());

        return redirect()->route('peluquerium.index')
            ->with('success', 'Peluquerium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peluquerium = Peluquerium::find($id);

        return view('peluquerium.show', compact('peluquerium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peluquerium = Peluquerium::find($id);

        return view('peluquerium.edit', compact('peluquerium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Peluquerium $peluquerium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peluquerium $peluquerium)
    {
        request()->validate(Peluquerium::$rules);

        $peluquerium->update($request->all());

        return redirect()->route('peluqueria.index')
            ->with('success', 'Peluquerium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $peluquerium = Peluquerium::find($id)->delete();

        return redirect()->route('peluqueria.index')
            ->with('success', 'Peluquerium deleted successfully');
    }
}
