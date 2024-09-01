<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index', [
            'listings'=> Listing::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show', [
            'listings' => $listing,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//
        $validatedData = $request->validate([
            'beds' => 'required|integer|min:1',
            'baths' => 'required|integer|min:1',
            'area' => 'required|integer|min:10',
            'city' => 'required|min:3',
            'street' => 'required|min:3',
            'code'=> 'required|min:3',
            'street_nr'=> 'required|min:1',
            'price'=> 'required|integer|min:3',

        ]);


        Listing::create($validatedData);


        return redirect()->route('listing.index')
            ->with('message', 'Listing has been created.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit', [
           'listing'=>$listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {

        $validatedData = $request->validate([
            'beds' => 'required|integer|min:1',
            'baths' => 'required|integer|min:1',
            'area' => 'required|integer|min:10',
            'city' => 'required|min:3',
            'street' => 'required|min:3',
            'code'=> 'required|min:3',
            'street_nr'=> 'required|min:1',
            'price'=> 'required|integer|min:3',

        ]);


        $listing->update($validatedData);


        return redirect()->route('listing.index')
            ->with('message', 'Listing has updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->back()->with('message', 'Listing has been deleted.');
    }
}
