<?php

namespace App\Http\Controllers;

use App\Models\AseoPersonal;
use Illuminate\Http\Request;

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
    public function index()
    {
        $aseoPersonals = AseoPersonal::paginate();

        return view('aseo-personal.index', compact('aseoPersonals'))
            ->with('i', (request()->input('page', 1) - 1) * $aseoPersonals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aseoPersonal = new AseoPersonal();
        return view('aseo-personal.create', compact('aseoPersonal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AseoPersonal::$rules);

        $aseoPersonal = AseoPersonal::create($request->all());

        return redirect()->route('aseo-personals.index')
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

        return view('aseo-personal.show', compact('aseoPersonal'));
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

        return view('aseo-personal.edit', compact('aseoPersonal'));
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

        return redirect()->route('aseo-personals.index')
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

        return redirect()->route('aseo-personals.index')
            ->with('success', 'AseoPersonal deleted successfully');
    }
}
