<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Http\Requests\ProduksiRequest;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
  
    public function index(Request $request)
    {
        $keyword = $request->search;

        if ($request->has('search')) {
            $items = Produksi::Where('pasar', 'LIKE', '%'.$keyword.'%')->get();
        } else {
            $items = Produksi::all();
        }

        return view('pages.kelola-produksi', [
            'items' => $items,
            'keyword' => $keyword
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


    
    public function update(ProduksiRequest $request, $id)
    {
        $data = $request->all();

        $item = Produksi::findOrFail($id);

        $item->update($data);

        return redirect()->route('produksi.index');
    }


    public function destroy($id)
    {
        //
    }
    
    public function deleteChecked(Request $request)
    {
        $ids = $request->ids;
        Produksi::whereIn('id',$ids)->delete();
        return response()->json(['success'=>"Data berhasil dihapus!"]);
    }
}
