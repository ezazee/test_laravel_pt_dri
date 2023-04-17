<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index(){
        $hero = Hero::all();
        return view('admin.hero.index', compact("hero"));
    }

    public function update(Request $request, Hero $hero){
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

        $hero->update($input);

        //redirect to index
        return redirect()->route('hero.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
