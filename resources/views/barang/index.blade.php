@extends('barang.template')

@include('barang.navbar')

@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">NAMA BARANG</th>
        <th scope="col">HARGA</th>
        <th scope="col">STOK</th>
        <th scope="col">ID SUPPLIER</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($data_barang as $barang)
        <tr>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->id_supplier }}</td>
        </tr>
      @empty
          <div class="alert alert-danger">
              Data Barang belum Tersedia.
          </div>
      @endforelse
    </tbody>
</table>  
@endsection