<?php

namespace App\Http\Controllers;

use App\Models\Produksi;

// use Carbon\Carbon;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        // return view('pages.beranda');
        $items = Produksi::all();
        $things = Produksi::all();

        return view('pages.beranda', [
            'items' => $items,
            'things' => $things
        ]);
    }
}
