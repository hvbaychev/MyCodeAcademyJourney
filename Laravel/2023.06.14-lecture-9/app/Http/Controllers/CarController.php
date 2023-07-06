<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Mechanic;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('reservation', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owners = Owner::all();
        $mechanics = Mechanic::all();
        return view('cars.create', compact('owners', 'mechanics'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->make = $request->input('car_make');
        $car->model = $request->input('car_model');
        $car->owner_id = $request->input('owner_id');
        $car->mechanic_id = $request->input('mechanic_id');
        $car->save();

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->owner_id = $request->input('owner_id');
        $car->mechanic_id = $request->input('mechanic_id');
        $car->save();

        return redirect()->route('cars.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
