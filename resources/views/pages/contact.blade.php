@extends('main')

@section('title')
    @parent Contact Me
@endsection

@section('content')
       
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label for="name">Login</label>
                        <input class="login" name="name"  id="name" type="text">
                    </div>
                    <div>    
                        <label for="review">Review</label>
                        <textarea class="textfield" name="review"  id="review"></textarea>
                    </div>
                    <div>
                        <input class="go" type="submit" value="Go!">
                    </div>
                </form>
@endsection


