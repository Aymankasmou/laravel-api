<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function index()
    {
        $users = Car::all(); //

        return response()->json([ //
            'status' => true, //
            'cars' => $users //
        ], 200); //
    }


    public function store(Request $request)
    {

        $user = new User;
        $user->id = "id";
        $user->make = "make";
        $user->model = "model";
        $user->year = "year";
        $user->price = "price";
        $user->description = "description";
        $user->create();

        return response()->json([ //
            'status' => true, //
            'message' => 'post Create successfully', //
            'cars' => $user //
        ], 201); //
    }



    public function show($id)
    {
        return Car::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = new User;
        $user->id = "id";
        $user->make = "make";
        $user->model = "model";
        $user->year = "year";
        $user->price = "price";
        $user->description = "description";
        $user->update();

        return response()->json([ //
            'status' => true, //
            'message' => 'post Update successfully', //
            'cars' => $user //
        ], 201);
    }

    public function destroy($id)
    {
        Car::destroy($id);
        return response()->noContent();
    }
}
