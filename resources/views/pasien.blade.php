@extends('layouts.app_admin')

@section('content')
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Pasien</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Pasien</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{url('pasien/tambahdata')}}"  class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Tambah Data</a>
                    </div>
                </div>  
                     
    <div class="row justify-content-center"> 
    @if (session('status'))
                    <div class="alert alert-success">
                                {{ session('status') }}
                    </div>
                    @endif
    <table class="table">
  <thead>
    <tr>
   
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">ID Dokter</th>
      <th scope="col">Metode Pembayaran</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach($pasien as $li) 
    <tr>
      <td>{{$no++}}</td>
      <td>{{$li->nama}}</td>
      <td>{{$li->no_telp}}</td>
      <td>{{$li->dokter}}</td>
      <td>{{$li->metode_pembayaran}}</td>
      <td>{{$li->created_at}}</td>
      <td>
          <a href="pasien/{{$li->id}}" class="btn waves-effect waves-light btn btn-info btn-sm">
            Lihat</a>    
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal{{$li->id}}">
             Hapus
            </button> 
       </td>  
    </tr>
    <div class="modal fade" id="hapusModal{{$li->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda Akan menghapus Hapus Data ini ?
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="pasien/{{$li->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    @endforeach
  </tbody>
</table>
@endsection
