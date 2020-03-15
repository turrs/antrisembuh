@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                            <!-- Tab panes -->
                            <div class="card-body">
                        <form  method="POST" class="form-horizontal form-material">
                                 @csrf
                                 @method('put')
                                    <div class="form-group row">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" class="form-control form-control-line" value="{{$pasien->nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$pasien->alamat}}" name="alamat"  class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="no_telp" value="{{$pasien->no_telp}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12">ID Dokter</label>
                                        <div class="col-sm-12">
                                        
                                     <input type="text" name="dokter"  class="form-control form-control-line" value="{{$pasien->dokter}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Riwayat Penyakit</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="riwayat_penyakit" class="form-control form-control-line"> 
                                            {{$pasien->riwayat_penyakit}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Biaya</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="biaya" value="{{$pasien->biaya}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12">Metode Pembayaran</label>
                                        <div class="col-sm-12">
                                            <select name="metode_pembayaran" class="form-control form-control-line">
                                               
                                                <option >{{$pasien->metode_pembayaran}}</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Edit Pasien</button>
                                        </div>
                                    </div>
                                </form>
                </div>
    </div>
</div>
</div>
    </div>
@endsection
