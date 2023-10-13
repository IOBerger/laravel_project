@extends('main')

@section('title')
    @parent News
@endsection

@section('content')
                <h2>Category: {{$categoryName}}</h2>
                @foreach($news as $id => $newsItem)    
                    <h3><a href="{{ route('newsItem', ['item' => $newsItem->id]) }}">{{$newsItem->title}}</a></h3>
                    <p>{{$newsItem->text}}</p>
                @endforeach
                {{ $news->links('pagination') }}
                
@endsection