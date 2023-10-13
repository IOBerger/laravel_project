@extends('main')

@section('title')
    Categories of News
@endsection

@section('content')
            <ul>
                @foreach ($categories as $category)
                    <li class="category-item">         
                        <span style="font-size: {{$category->importance}}px"><a href="{{ route( 'news', [ 'category' => $category->id ] ) }}">{{$category->title}}</a></span>
                    </li>
                @endforeach
            </ul>
@endsection
           