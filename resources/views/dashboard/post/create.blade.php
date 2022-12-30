@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PRODUK PRABOT</h1>
</div>
<div class="col-md-12">
  <a href="{{ url('dashboard') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Tambah Produk </a>
</div>

<form action="{{ url('dashboard') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">NAMA</label>
        <input type="text" class="form-control" id="nama_barang" placeholder="masukan nama" name="nama_barang">
    </div>

    <div class="form-group">
        <label for="nama">GAMBAR</label>
        <input type="text" class="form-control" id="gambar" placeholder="masukan nama gambar" name="gambar">
    </div>

    <div class="form-group">
        <label for="nama">HARGA</label>
        <input type="text" class="form-control" id="harga" placeholder="masukan harga" name="harga">
    </div>

    <div class="form-group">
        <label for="nama">STOK</label>
        <input type="text" class="form-control" id="stok" placeholder="masukan stok" name="stok">
    </div>

    <div class="form-group">
        <label for="nama">KETERANGAN</label>
        <input type="text" class="form-control" id="kererangan" placeholder="masukan keterangan" name="keterangan">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Produk</button>


</form>

@endsection