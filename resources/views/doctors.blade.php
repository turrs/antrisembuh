@extends('layouts.app_admin')

@section('content')

<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dokter</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Dokter</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="" data-toggle="modal" data-target="#createModal" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Tambah Data</a>
                    </div>
                </div>  
                     
    <div class="row justify-content-center">
    @if (session('status'))
                    <div class="alert alert-success">
                                {{ session('status') }}
                    </div>
                    @endif
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Dokter</th>
      <th scope="col">Nama</th>
      <th scope="col">Spesialis</th>
      <th scope="col">Jadwal</th>
      <th scope="col">Telepon</th>
    </tr>
  </thead>
  <tbody>    
      @php
            $no = 1;    
        @endphp
          @foreach($dokter as $li)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $li->id}}</td>
            <td>{{ $li->nama }}</td>
            <td>{{ $li->spesialis }}</td>
            <td>{{ $li->jadwal }}</td>
            <td>{{ $li->no_telp }}</td>
            <td>
            <button href="{{ route('dokter',$li->id) }}" type="button" class="btn waves-effect waves-light btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{ $li->id }}">
            Edit</button>    
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
                    <form action="dokter/{{$li->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="editModal{{ $li->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form method="POST" action="dokter/{{$li->id}}">
                        @method('put')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $li->nama }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="spesialis" class="col-md-4 col-form-label text-md-right">{{ __('Spesialis') }}</label>
                            <div class="col-md-6">
                                <input id="spesialis" type="text" class="form-control @error('spesialis') is-invalid @enderror" name="spesialis" value="{{ $li->spesialis }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jadwal" class="col-md-4 col-form-label text-md-right">{{ __('Jadwal') }}</label>
                            <div class="col-md-6">
                                <input id="jadwal" type="text" class="form-control @error('jadwal') is-invalid @enderror" name="jadwal" value="{{ $li->jadwal }}" required autocomplete="jadwal" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $li->no_telp }}" required autocomplete="no_telp" autofocus>
                            </div>
                        </div>

                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Edit</button>
                      </div>
                
                    </form>
            @endforeach
  </tbody>
</table>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form method="POST" action="{{ route('dokter') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="spesialis" class="col-md-4 col-form-label text-md-right">{{ __('Spesialis') }}</label>
                            <div class="col-md-6">
                                <input id="spesialis" type="text" class="form-control @error('spesialis') is-invalid @enderror" name="spesialis"  required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jadwal" class="col-md-4 col-form-label text-md-right">{{ __('Jadwal') }}</label>
                            <div class="col-md-6">
                                <input id="jadwal" type="text" class="form-control @error('jadwal') is-invalid @enderror" name="jadwal"  required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" required autocomplete="no_telp" autofocus>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Tambah Data</button>
                      </div>
                
                    </form>  
@endsection
