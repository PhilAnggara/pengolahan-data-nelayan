<?php

namespace App\Http\Controllers;

use App\Models\Tangkapan;
use App\Http\Requests\TangkapanRequest;

use DB;

use Illuminate\Http\Request;

class TangkapanController extends Controller
{
  
    public function index()
    {
        $items = Tangkapan::all();
        $data = DB::table('kecamatan')->get();

        return view('pages.kelola-tangkapan', [
            'items' => $items,
            'data' => $data
        ]);
    }

 
    
    public function create()
    {
        $data = DB::table('kecamatan')->get();
        return view('pages.tangkapan')->with('data', $data);
    }
    
    public function desa($id){
        echo json_encode(DB::table('desa')->where('id_kecamatan', $id)->get());
    }

  
    
    public function store(TangkapanRequest $request)
    {
        $data = $request->all();

        Tangkapan::create($data);
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


    
    public function update(TangkapanRequest $request, $id)
    {
        $data = $request->all();

        $item = Tangkapan::findOrFail($id);

        $item->update($data);

        return redirect()->route('tangkapan.index');
    }


    public function destroy($id)
    {
        //
    }
    
    public function deleteChecked(Request $request)
    {
        $ids = $request->ids;
        Tangkapan::whereIn('id',$ids)->delete();
        return response()->json(['success'=>"Data berhasil dihapus!"]);
    }
}
