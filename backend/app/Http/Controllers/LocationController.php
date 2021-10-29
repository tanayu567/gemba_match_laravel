<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function showCreateForm()
    {
        return view('Location.create');
    }

    public function create(Request $request)
    {
        $location = new Location();
        $location->name = $request->name;
        $location->address = $request->address;
        $location->start_date = $request->start_date;
        $location->completion_date = $request->completion_date;
        $location->price = $request->price;
        Auth::user()->locations()->save($location);

        return redirect()->intended('/');
    }
}
