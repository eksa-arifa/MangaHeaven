@extends('Layouts/main')

@section('content')
<form action="{{url('page-search')}}">
    <input type="text" placeholder="Cari Manga, Manhwa, atau Manhua..." name="search">
    <button type="submit">Cari</button>
</form>
<div class="kotak">
    @foreach ($komik[0] as $item)
    <a href="/page/{{strtolower($item->type)}}/{{explode('/', $item->endpoint)[2]}}">
        <div class="image">
            <img src={{$item->image}} alt="thumbnail">
        </div>
        <div class="info">
            <h2>{{$item->title}}</h2>
            <p>{{$item->desc}}</p>
            <h3>{{$item->type}}</h3>
        </div>
    </a>
    @endforeach
</div>
@endsection