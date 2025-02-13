<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PricingController extends Controller
{



    public function index()
    {
        $response = Http::get(dashboard_url('/plans'));

        if ($response->successful()) {
            $plans = $response->json();
        } else {
            $plans = [];
        }

        return view('pricing', [
            'plans' => $plans['data'],
        ]);
    }
}
