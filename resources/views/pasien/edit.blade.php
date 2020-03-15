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
                                            <input type="text" name="nama"  class="form-control form-control-line" value="{{$pasien->nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="alamat" value="{{$pasien->alamat}}" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="no_telp" value="{{$pasien->telepon}}" class="form-control form-control-line">
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
                                            <textarea rows="5" name="riwayat_penyakit" value="{{$pasien->riwayat_penyakit}}" class="form-control form-control-line"></textarea>
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
                                            <select name="metode_pembayaran"  class="form-control form-control-line">
                                                <option value="{{$pasien->metode_pembayaran}}">BPJS</option>
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
