<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        $map = Map::all();
        return view('admin.maps.index', compact("map"));
    }

    public function update(Request $request, Map $map){
        $input = $request->all();

       // Cek jika ada gambar yang diupload
        if ($gambar = $request->file('gambar1')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar1'] = $gambarName;
        } else {
            unset($input['gambar1']);
        }

        if ($gambar = $request->file('gambar2')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar2'] = $gambarName;
        } else {
            unset($input['gambar2']);
        }

        $map->update($input);

        //redirect to index
        return redirect()->route('map.index')->with(['success' => 'Data Berhasil Diubah!']);
}
}
