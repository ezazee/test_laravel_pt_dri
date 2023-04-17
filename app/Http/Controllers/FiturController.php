<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index(){
        $fitur = Fitur::all();
        return view('admin.fitur.index', compact("fitur"));
    }

    public function create(){
        return view('admin.fitur.create');
    }

    public function store(Request $request, Fitur $fitur )
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

        $fitur->create($input);

        //redirect to index
        return redirect()->route('fitur.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function edit(string $id){
        $fitur = Fitur::find($id);
        return view('admin.fitur.edit', compact("fitur"));
    }

    public function update(Request $request, Fitur $fitur)
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

        $fitur->update($input);

        //redirect to index
        return redirect()->route('fitur.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function destroy( $id)
    {
        $data = Fitur::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('fitur.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
