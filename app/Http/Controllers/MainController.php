<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $barangs = Barang::paginate(20);
        return view('main', compact('barangs'));
    }
}
