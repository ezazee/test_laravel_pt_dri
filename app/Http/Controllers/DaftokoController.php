<?php

namespace App\Http\Controllers;

use App\Models\Daftoko;
use Illuminate\Http\Request;

class DaftokoController extends Controller
{
    public function index(){
        $daftoko = Daftoko::all();
        return view('admin.daftoko.index', compact("daftoko"));
    }

    public function update(Request $request, Daftoko $daftoko){
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

        $daftoko->update($input);

        //redirect to index
        return redirect()->route('daftoko.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
