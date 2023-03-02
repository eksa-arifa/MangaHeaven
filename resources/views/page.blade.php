@extends('Layouts/main')

@section('content')
<div class="thumbnail">
    <img src="{{$komik[0]->thumbnail}}" alt="thumbnail">
</div>
<div class="info">
    <h1>Judul: {{$komik[0]->title}}</h1>
    <h2>Type: {{$komik[0]->type}}</h2>
    <p>Author: {{$komik[0]->author}}</p>
    <p>Status: {{$komik[0]->status}}</p>
    <p>Minimal: {{$komik[0]->rating}}</p>
    <h2>Genre:</h2>
    <ul>
        @foreach($komik[0]->genre as $item)
        <li>
            {{$item}}
        </li>
        @endforeach
    </ul>
</div>
<div class="chapter">
    <h2>Chapter-List:</h2>
    @foreach($komik[0]->chapter_list as $item)
    <a href="/page/chapter/{{explode('/', $item->endpoint)[1]}}/{{explode('/', $item->endpoint)[2]}}">
        {{$item->name}}
    </a>
    @endforeach
</div>
@endsection