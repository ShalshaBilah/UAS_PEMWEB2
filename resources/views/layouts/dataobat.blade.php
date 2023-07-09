@extends('template.index')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Obat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <a href="{{route('tambahobat')}}" class="btn btn-success">Tambah Data +</a>

    <div class="row g-3 align-items-center mt-2">
  <div class="col-auto">
    <form action="/obat" method="GET">
    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
</form>
  </div>
</div>

        <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Foto</th>
      <th scope="col">Stok</th>
      <th scope="col">Pemroduksi</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp

  @foreach ($data as $index => $row)
        <tr>
            <th scope="row"->{{$index + $data->firstItem()}}</th>
            <th scope="row"->{{$row->nama}}</th>
            <td>
              <img src="{{ asset('fotoobat/'.$row->foto)}}"alt="" style="width: 50px;">
            </td>
            <th scope="row"->{{$row->stok}}</th>
            <th scope="row"->{{$row->pemroduksi}}</th>
            <th scope="row"->{{$row->harga}}</th>
            <th scope="row"->{{$row->aksi}}
            <a href="{{url('tampilkandata')}}/{{$row->id}}" class="btn btn-info">Edit</a>
            <a href="{{url('delete')}}/{{$row->id}}" class="btn btn-danger">Delete</a>
</th>
    @endforeach
    
    
  </tbody>
</table>
{{ $data->links() }}
</div>
</div>
</div>

@endsection