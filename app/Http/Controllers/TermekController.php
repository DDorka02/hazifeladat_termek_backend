<?php

namespace App\Http\Controllers;
use App\Models\Termek;
use Illuminate\Http\Request;

class TermekController extends Controller
{
    public function index()
    {
        return Termek::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Termek();
        $record->fill($request->all());
        $record->save();
    }
}
