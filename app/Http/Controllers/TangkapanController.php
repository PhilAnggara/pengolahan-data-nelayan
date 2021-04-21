<?php

namespace App\Http\Controllers;

use App\Models\Tangkapan;
use App\Models\User;
use App\Http\Requests\TangkapanRequest;

use DB;

use Illuminate\Http\Request;

class TangkapanController extends Controller
{
  
    public function index(Request $request)
    {
        $keyword = $request->search;

        if ($request->has('search')) {
            $items = Tangkapan::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
        } else {
            $items = Tangkapan::all();   
        }
        
        $data = DB::table('kecamatan')->get();

        return view('pages.kelola-tangkapan', [
            'items' => $items,
            'data' => $data,
            'keyword' => $keyword
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

        // Convert id_kecamatan to kecamatan
        $tangkapan = Tangkapan::all()->last();
        $kec = DB::table('kecamatan')->where('id', $request->kecamatan)->first();
        $tangkapan->kecamatan = $kec->kecamatan;
        $tangkapan->save();

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

        // Convert id_kecamatan to kecamatan
        $kec = DB::table('kecamatan')->where('id', $request->kecamatan)->first();
        if ($kec) {
            $item->kecamatan = $kec->kecamatan;
            $item->save();
        }

        // Rename User
        $uid = $request->uid;
        $pemilik = $request->name;
        $user = User::find($uid);
        $user->name = $pemilik;
        $user->save();

        return redirect()->back();
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
