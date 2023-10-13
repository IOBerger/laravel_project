@extends('main')

@section('title')
    @parent Add News Item
@endsection

@section('content')
                <form action="" method="POST">
                @csrf
                <div>
                        <label for="title" id="title">Title</label>
                        <input class="type-title" name="title" type="text">
                </div>
                <div>
                       <label for="category" id="category">Title</label>
                        <select name="category" id="category">
                                @foreach ($categories as $key => $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                        </select>
                </div>
                <div>
                        <label for="long-description">Long Description</label>
                        <textarea class="textfield" name="long_description" id="long-description" cols="50" rows="10"></textarea>
                </div>
                <div>
                        <input class="go" type="submit" value="Go!">
                </div>
                </form>

@endsection
 