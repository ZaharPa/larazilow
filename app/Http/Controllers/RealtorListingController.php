<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RealtorListingController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'deleted' => $request->boolean('deleted'),
            ... $request->only(['by', 'order'])
        ];

        return inertia(
            'Realtor/Index', 
            [
                'filters' => $filters,
                'listings' => Auth::user()
                    ->listings()
                    ->filter($filters)
                    ->paginate(5)
                    ->withQueryString()
            ]
        );
    }

    public function create()
    {
        return inertia('Realtor/Create');
    }

    public function store(Request $request)
    {
        $request->user()->listings()->create(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:15|max:1500',
                'city' => 'required',
                'code' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'street' => 'required',
                'price' => 'required|integer|min:1|max:20000000'
            ])
        );

        return redirect()->route('realtor.listing.index')->with('success', 'Listing was created!');
    }

    public function edit(Listing $listing)
    {
        Gate::authorize('update', $listing);        
        
        return inertia(
            'Realtor/Edit',
            [
                'listing' => $listing
            ]
        );
    }

    public function update(Request $request, Listing $listing)
    {
        Gate::authorize('update', $listing);        

        $listing->update(
            $request->validate([
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:15|max:1500',
            'city' => 'required',
            'code' => 'required',
            'street_nr' => 'required|min:1|max:1000',
            'street' => 'required',
            'price' => 'required|integer|min:1|max:20000000'
            ])
        );

        return redirect()->route('realtor.listing.index')->with('success', 'Listing was changed!');
    }

    public function destroy(Listing $listing)
    {
        Gate::authorize('delete', $listing);        

        $listing->deleteOrFail();

        return redirect()->back()
        ->with('success', 'Listing was delete');
    }

    public function restore(Listing $listing)
    {
        $listing->restore();

        return redirect()->back()
        ->with('success', 'Listing was restored!');
    }
}
