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

        return response([$distance->getResponseObject()], 200);
    }

    public function getEmissions()
    {
        $URL = "https://calculator.carbonfootprint.com/calculator.aspx?tab=6";
    }
}
