@extends('main')

@section('title')
    @parent Authorization
@endsection

@section('content')
       
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label for="login">Login</label>
                        <input name="login"  id="login" type="text">
                    </div>
                    <div>    
                        <label for="password">Password</label>
                        <input name="password"  id="password" type="password">
                    </div>
                    <div>
                        <input name="remember" id="remember" type="checkbox">
                        <label for="remember">Remember me</label>
                    </div>
                    <div>
                        <input type="submit" value="Go!">
                    </div>
                </form>
@endsection


