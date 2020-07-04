@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{url('/jawaban/{pertanyaan_id}')}}"  method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="judul" name="nama_judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea id="isi" name="isi"class="form-control" rows="3" placeholder="Masukkan Isi"></textarea>
          </div>
        <input type="hidden" name="tgl_dibuat" value="{{ date('Y-m-d') }}">
        <input type="hidden" name="tgl_diperbaharui" value="{{ date('Y-m-d') }}">

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection