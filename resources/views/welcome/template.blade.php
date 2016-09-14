@extends('template.public')

@section('judul')
<h1> ini judulnya </h1>
@endsection


@section('konten')
<ul>
    @foreach($hari as $h)
    <li> @include('sub.sidebar',array('link'=>$h))</li>
    @endforeach
</ul>
@endsection
