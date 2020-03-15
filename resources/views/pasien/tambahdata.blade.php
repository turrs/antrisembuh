@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                            <!-- Tab panes -->
                            <div class="card-body">
                        <form action="{{route('pasien')}}" method="POST" class="form-horizontal form-material">
                                 @csrf
                                    <div class="form-group row">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="alamat" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="no_telp" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12">Dokter</label>
                                        <div class="col-sm-12">
                                            <select name="dokter" class="form-control form-control-line">
                                            @foreach($dokter as $li)
                                                <option value="{{$li->id}}">{{$li->nama}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Riwayat Penyakit</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="riwayat_penyakit" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Biaya</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="biaya" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12">Metode Pembayaran</label>
                                        <div class="col-sm-12">
                                            <select name="metode_pembayaran" class="form-control form-control-line">
                                                <option>BPJS</option>
                                                <option>TUNAI</option>
                                                <option>TRANSFER</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Tambah Pasien</button>
                                        </div>
                                    </div>
                                </form>
                </div>
    </div>
</div>
</div>
    </div>
@endsection
