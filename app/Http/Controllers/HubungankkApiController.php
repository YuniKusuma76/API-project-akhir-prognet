<?php

namespace App\Http\Controllers;

use App\Models\Hubungankk;
use Illuminate\Http\Request;

class HubungankkApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hubungankk::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hubungankk = new Hubungankk();
        $hubungankk->fill($request->all())->save();
        return $hubungankk;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Hubungankk::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hubungankk = Hubungankk::find($id);
        $hubungankk->fill($request->all())->save();
        return $hubungankk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hubungankk = Hubungankk::find($id);
        $hubungankk->delete();
    }
}
