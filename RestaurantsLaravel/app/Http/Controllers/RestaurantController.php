<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('restaurants.index',['restaurants'=>Restaurant::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Restaurant::create([
            'name'=>$request['name'],
            'address'=>$request['address'],
            'zipCode'=>$request['zipCode'],
            'town'=>$request['town'],
            'country'=>$request['country'],
            'description'=>$request['description'],
            'review'=>$request['review'],
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show',['restaurant'=>$restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit',['restaurant'=>$restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
