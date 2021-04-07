<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Http\Requests\ProduksiRequest;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
  
    public function index()
    {
        $items = Produksi::all();

        return view('pages.kelola-produksi', [
            'items' => $items
        ]);
    }

 
    
    public function create()
    {
        return view('pages.produksi');
    }

  
    
    public function store(ProduksiRequest $request)
    {
        $data = $request->all();

        Produksi::create($data);
        return redirect()->route('beranda');
    }

  
    
    public function show($id)
    {
        //
    }

   
    
    public function edit($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
