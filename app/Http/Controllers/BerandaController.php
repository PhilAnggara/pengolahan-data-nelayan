<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Models\Tangkapan;

// use Carbon\Carbon;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $items = Produksi::all();
        $things = Tangkapan::with([
            'user', 'kecamatan'
        ])->get();

        return view('pages.beranda', [
            'items' => $items,
            'things' => $things
        ]);
    }
}
