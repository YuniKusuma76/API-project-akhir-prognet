<?php

namespace App\Http\Controllers;

use App\Models\Anggotakk;
use Illuminate\Http\Request;

class AnggotakkApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Anggotakk::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anggotakk = new Anggotakk();
        $anggotakk->fill($request->all())->save();
        return $anggotakk;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Anggotakk::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggotakk = Anggotakk::find($id);
        $anggotakk->fill($request->all())->save();
        return $anggotakk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggotakk = Anggotakk::find($id);
        $anggotakk->delete();
    }
}
