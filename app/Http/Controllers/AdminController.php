<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class AdminController extends Controller
{
    public function main()
    {
        $barangs = Barang::paginate(20);
        return view('dashboard.post.index', compact('barangs'));
    }

    protected function create()
    {
        return view('dashboard.post.create');
    }

    protected function store(Request $request)
    {
        $barangs = new Barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->gambar = $request->gambar;
        $barangs->harga = $request->harga;
        $barangs->stok = $request->stok;
        $barangs->keterangan = $request->keterangan;

        $barangs->save();

        return redirect('dashboard.post');
    }
}
