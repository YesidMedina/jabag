<?php

namespace App\Http\Controllers;
use App\Models\Cosmetico;
use Illuminate\Http\Request;

class CatalogocosmeController extends Controller
{
    //
    public function index()
    {
        $cosmeticos = Cosmetico::paginate();
         return view('cosmetico', compact('cosmeticos'));
    }

}
