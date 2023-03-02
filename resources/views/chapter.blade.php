@extends('Layouts/main')

@section('content')
<div class="title">
    <h1>{{$komik[0]->title}}</h1>
</div>
<div class="gambar">
    @foreach($komik[0]->image as $item)
    <img src="{{$item}}">
    @endforeach
</div>
@endsection