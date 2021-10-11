@extends('layout')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                New Posts
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-body">
                <form action="/posts" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection