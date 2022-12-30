@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PRODUK PRABOT</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <tbody>
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12 mb-5">
                  
              </div>
              @foreach($barangs as $barang)
              <div class="col-md-4" >
                  <div class="card"  >
                    <img src="{{ url('img') }}/{{ $barang->gambar }}" class="card-img-top" width="200%" height="225" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                      <p class="card-text">
                          <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                          <strong>Stok :</strong> {{ $barang->stok }} <br>
                          <hr>
                          <strong>Keterangan :</strong> <br>
                          {{ $barang->keterangan }} 
                      </p>
                      <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                    </div>
                  </div> 
              </div>
              @endforeach
          </div>
      </div>
      </tbody>
    </table>
  </div>
@endsection