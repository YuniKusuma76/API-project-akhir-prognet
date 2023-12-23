<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Penduduk::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penduduk = new Penduduk();
        $penduduk->fill($request->all())->save();
        return $penduduk;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Penduduk::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->fill($request->all())->save();
        return $penduduk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
    }
}
