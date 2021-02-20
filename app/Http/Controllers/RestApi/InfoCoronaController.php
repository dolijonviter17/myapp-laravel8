<?php

namespace App\Http\Controllers\RestApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class InfoCoronaController extends Controller
{
    public function index()
    {
        $apiCorona = Http::get('https://pomber.github.io/covid19/timeseries.json');
        $dataCorona = $apiCorona->json();
        foreach ($dataCorona as $key => $value) {
            $days_count = count($value)-1;
            $days_count_prev = $days_count-1;
        }

        $totalConfirmed = 0;
        $totalRecovered = 0;
        $totalDeath = 0;

        foreach ($dataCorona as $key => $value) {
            $totalConfirmed = $totalConfirmed + $value[$days_count]['confirmed'];
            $totalRecovered = $totalRecovered + $value[$days_count]['recovered'];
            $totalDeath = $totalDeath + $value[$days_count]['deaths'];
        }

        return view('livewire.infocorona', compact(
            'dataCorona', 'days_count', 'days_count_prev',
            'totalConfirmed', 'totalRecovered', 'totalDeath'
        ));

    }
    public function getCountryCase()
    {
        # code...
    }
}
