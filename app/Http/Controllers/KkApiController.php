<?php

namespace App\Http\Controllers;

use App\Models\Kk;
use Illuminate\Http\Request;

class KkApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kk::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kk = new Kk();
        $kk->fill($request->all())->save();
        return $kk;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Kk::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kk = Kk::find($id);
        $kk->fill($request->all())->save();
        return $kk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kk = Kk::find($id);
        $kk->delete();
    }
}
