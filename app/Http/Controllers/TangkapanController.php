<?php

namespace App\Http\Controllers;

use App\Models\Tangkapan;
use App\Http\Requests\TangkapanRequest;

use Illuminate\Http\Request;

class TangkapanController extends Controller
{
  
    public function index()
    {
        $items = Tangkapan::all();

        return view('pages.kelola-tangkapan', [
            'items' => $items
        ]);
    }

 
    
    public function create()
    {
        return view('pages.tangkapan');
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


    
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
