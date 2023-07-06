<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;


class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mechanic = Mechanic::all();
        return view('reservation', ['mechanics' => $mechanic]);
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
        $mechanic = new Mechanic();
        $mechanic->name = $request->input('mechanic_name');
        $mechanic->email = $request->input('mechanic_email');
        $mechanic->phone = $request->input('mechanic_phone');
        $mechanic->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mechanic = Mechanic::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mechanic = Mechanic::find($id);
        $mechanic->name = $request->input('mechanic_name');
        $mechanic->email = $request->input('mechanic_email');
        $mechanic->phone = $request->input('mechanic_phone');
        $mechanic->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mechanic = Mechanic::find($id);
        $mechanic->delete();

    }
}
