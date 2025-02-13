<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TradeController extends Controller
{
    public function index()
    {
        // $filePath = storage_path('app/trading_history.json');  // Adjust the path if necessary
        // if (!file_exists($filePath)) {
        //     dd('File does not exist at path: ' . $filePath);
        // }
        // $json = Storage::get('trading_history.json');
        // $json = Storage::disk('local')->get('trading_history.json');
        $json = Storage::disk('public')->get('trading_history.json');

        // dd($json);
        $trades = json_decode($json, true)['trading_history'];

        $trades = collect($trades)->sortByDesc('timestamp');
        $perPage = 10;
        $currentPage = request()->input('page', 1);
        $pagedTrades = $trades->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $tradesPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedTrades,
            $trades->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view('trades', compact('tradesPaginated'));
    }
}
