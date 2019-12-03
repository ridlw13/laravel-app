@extends('template/main')


@section('judul', 'Detail Student')

@section('container')
<div class="container">
 <div class="row">
  <div class="col">
      <h1>Detail Student</h1>

      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$student->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
    <p class="card-text">{{$student->email}}</p>
    <p class="card-text">{{$student->jurusan}}</p>
    <a href="#" class="btn success">Edit</a>
    <a href="#" class="btn danger">delete</a>
    <a href="{{url('students/')}}" class="card-link">kembali</a>
  </div>
</div>

  </div>
 </div>
</div>
@endsection