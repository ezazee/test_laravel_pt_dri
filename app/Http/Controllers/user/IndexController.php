<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Daftoko;
use App\Models\Fitur;
use App\Models\Hero;
use App\Models\Kategori;
use App\Models\Map;
use App\Models\Tentang;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function root(){
        $hero = Hero::all();
        $tentang = Tentang::all();
        $kategori = Kategori::all();
        $map = Map::all();
        $fitur = Fitur::all();
        $daftoko = Daftoko::all();
        return view('index', compact(
            'hero',
            'tentang',
            'map',
            'fitur',
            'kategori',
            'daftoko',
        ));
    }
}
