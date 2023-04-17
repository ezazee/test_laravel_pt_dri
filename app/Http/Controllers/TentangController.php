<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        $tentang = Tentang::all();
        return view('admin.tentang.index', compact("tentang"));
    }

    public function update(Request $request, Tentang $tentang){
        $input = $request->all();

       // Cek jika ada gambar yang diupload
        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $tentang->update($input);

        //redirect to index
        return redirect()->route('tentang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
