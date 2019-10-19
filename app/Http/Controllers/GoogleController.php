<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SKAgarwal\GoogleApi\PlacesApi;

class GoogleController extends Controller
{
    public function complete(Request $request)
    {
        $googlePlaces = new PlacesApi("AIzaSyBpI4lx0aaCqHoCSUsngMRUKlCD0yMOEVc");
       $data= $googlePlaces->placeAutocomplete($request->input('key'));
        return $data;

    }
}
