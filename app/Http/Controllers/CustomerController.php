<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $users = Customer::all(); //

        return response()->json([ //
            'status' => true, //
            'Customer' => $users //
        ], 200); //
    }


    public function store(Request $request)
    {

        $user = new User;
        $user->id = "id";
        $user->make = "name";
        $user->make = "email";
        $user->create();

        return response()->json([ //
            'status' => true, //
            'message' => 'post Create successfully', //
            'cars' => $user //
        ], 201); //
    }



    public function show($id)
    {
        return Customer::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = new User;
        $user->id = "id";
        $user->make = "name";
        $user->make = "email";
        $user->update();

        return response()->json([ //
            'status' => true, //
            'message' => 'post Update successfully', //
            'cars' => $user //
        ], 201);
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return response()->noContent();
    }
}
