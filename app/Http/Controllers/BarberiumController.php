<?php

namespace App\Http\Controllers;

use App\Models\Barberium;
use Illuminate\Http\Request;

/**
 * Class BarberiumController
 * @package App\Http\Controllers
 */
class BarberiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberia = Barberium::paginate();

        return view('barberium.index', compact('barberia'))
            ->with('i', (request()->input('page', 1) - 1) * $barberia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barberium = new Barberium();
        return view('barberium.create', compact('barberium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Barberium::$rules);

        $barberium = Barberium::create($request->all());

        return redirect()->route('barberium.index')
            ->with('success', 'Barberium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barberium = Barberium::find($id);

        return view('barberium.show', compact('barberium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barberium = Barberium::find($id);

        return view('barberium.edit', compact('barberium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Barberium $barberium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barberium $barberium)
    {
        request()->validate(Barberium::$rules);

        $barberium->update($request->all());

        return redirect()->route('barberia.index')
            ->with('success', 'Barberium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $barberium = Barberium::find($id)->delete();

        return redirect()->route('barberia.index')
            ->with('success', 'Barberium deleted successfully');
    }
}
