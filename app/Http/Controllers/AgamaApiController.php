<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Agama::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agama = new Agama();
        $agama->fill($request->all())->save();
        return $agama;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Agama::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agama = Agama::find($id);
        $agama->fill($request->all())->save();
        return $agama;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agama = Agama::find($id);
        $agama->delete();
    }
}
