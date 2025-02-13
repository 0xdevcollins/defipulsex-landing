<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index () {
        $response = Http::get(dashboard_url('/plans'));

        if ($response->successful()) {
            $plans = $response->json();
        } else {
            $plans = [];
        }
        return view('home', [
            'plans' => $plans['data'],
        ]);
    }
}
