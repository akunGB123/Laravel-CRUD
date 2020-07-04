@extends('adminlte.master')

@section('content')
<div class="card-body ">
    <table class="table">
      <thead>
        <tr>
          <th style="width: 10px">ID</th>
          <th style="width: 20px">NAMA</th>
          <th style="width: 30px">ISI</th>
          <th style="width: 10px">DETAIL</th>
        </tr> 
      </thead>
      <tbody>
        @foreach ($pertanyaan as $data)
        <tr>
            <td>{{$data->id_pertanyaan}}</td>
            <td>{{$data->nama_judul}}</td>
            <td>{{$data->isi}}</td>
            <td> 
            <span><a href="/jawaban/{{$data->id_pertanyaan}}" class="btn btn-primary">Lihat Jawaban</a></span>
                <span><a href="/" class="btn btn-primary">Jawab</a></span>

            </td>
            
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection