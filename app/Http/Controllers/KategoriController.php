<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create(){
        return view('admin.kategori.create');
    }

    public function store(Request $request, Kategori $kategori )
    {
        $this->validate($request, [
            'title'    => 'required|min:5',
            'deskripsi'     => 'required|min:5',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $kategori->create($input);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function edit(string $id){
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit', compact("kategori"));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $this->validate($request, [
            'title'    => 'required|min:5',
            'deskripsi'     => 'required|min:5',
            'gambar'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $kategori->update($input);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function destroy( $id)
    {
        $data = Kategori::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
