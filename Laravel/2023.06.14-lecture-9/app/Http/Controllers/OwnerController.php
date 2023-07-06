<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::all();
        return view('reservation', ['owners' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $owner = new Owner();
        $owner->name = $request('owner_name');
        $owner->email = $request('owner_email');
        $owner->phone = $request('owner_phone');
        $owner->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owner = Owner::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner = Owner::find($id);
        $owner->name = $request('owner_name');
        $owner->email = $request('owner_email');
        $owner->phone = $request('owner_phone');
        $owner->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $owner = Owner::find($id);
        $owner->delete();
    }
}
