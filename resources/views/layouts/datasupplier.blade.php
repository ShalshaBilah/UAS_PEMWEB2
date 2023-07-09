@extends('template.index')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Supplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Supplier</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="container">
        <a href="{{route('tambahsupplier')}}" class="btn btn-primary">Tambah +</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/supplier" method="GET">
    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
    </form>
  </div>
</div>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                    <th scope="row">{{$index + $data->firstItem()}}</th>
                    <td>{{$row->nama}}</td>
                    <td>
                        <img src="{{ asset('fotosupplier/'.$row->foto)}}"alt="" style="width: 50px;">
                    </td>
                    <td>{{$row->alamat}}</td>
                    <td>{{$row->email}}</td>
                    <td>0{{$row->notelpon}}</td>
                    <td>
                    <a href="{{url('tampilanedit')}}/{{$row->id}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('deletesupplier')}}/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                    @endforeach
                  
                </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </div>
</div>
    @endsection