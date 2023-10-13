@extends('main')

@section('title')
    @parent {{ $newsItem[0]->title }}
@endsection

@section('content')
                <p>{{ $newsItem[0]->text }}</p>
@endsection

