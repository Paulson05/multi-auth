@extends('pages.layout.index')
@section('content')
    <div class="container mt-5">

            <form  action="{{route('postlogin')}}" method="post">
                @csrf
                <h1 class="text-center mt-5">login
                <div class="row justify-content-center m-l-5" >

                    <div class="col-md-8  mt-5">
                        <input type="email" name="email" placeholder="your email">
                    </div>
                    <div class="col-md-8  mt-5">
                        <input type="password" name="password" placeholder="your password">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-7">
                        <button value="submit" class="btn btn-primary  mt-5">submit</button>
                    </div>
                </div>

            </form>
    </div>
@endsection
