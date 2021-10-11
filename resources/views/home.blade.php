@extends('layout')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="my-3">
            <a href="/posts/create" class="btn btn-success">New Post</a>
        </div>
        <div class="card">
            <div class="card-header text-center">
                Contents
            </div>
            <div class="card-body">
                @foreach($data as $post)
                    <h5 class="card-title">{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <div class="form-row">
                        <a href="/posts/{{$post->id}}" class="btn btn-primary mr-2">View</a> 
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mr-2">Edit</a> 

                        <form action="/posts/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div> <hr>
                @endforeach
            </div>
        </div>
    </div>

@endsection