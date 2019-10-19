<?php

namespace App\Http\Controllers;

use CiroVargas\GoogleDistanceMatrix\GoogleDistanceMatrix;

class ResourceController extends Controller
{
    public function getDistanceData()
    {
        $distanceMatrix = new GoogleDistanceMatrix('AIzaSyBpI4lx0aaCqHoCSUsngMRUKlCD0yMOEVc');
        $distance = $distanceMatrix->setLanguage('en')
            ->addOrigin("40.400296, 49.865953")
            ->addDestination("41.722134,44.779351")
            ->setMode(GoogleDistanceMatrix::MODE_DRIVING)
            ->sendRequest();

        $km = $distance->getResponseObject()->rows[0]->elements[0]->distance->value / 1000;
        $result = $this->calcEmissions($km);
        return response($result, 200);
    }

    public function calcEmissions($km)
    {

        $transport = [];
        foreach (config('app.WAY') as $key => $value) {
            $transport[] = [
                "WAY" => $key,
                "value" => round($value * $km, 2)
            ];
        }

//        $transport = collect($transport)->sortBy('value');

        return $transport;
    }

}
