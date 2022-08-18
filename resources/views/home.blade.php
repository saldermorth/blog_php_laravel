
@extends('layout')

@section('title', 'Home')

@section('content')
@forelse ($posts as $post)
    <div class="post-item">
        <div class="post-content">   
            <h2> {{$post->title}}</h2>
            <p> {{$post->description}}</p>
        </div>
    </div>
        
@empty
    <h1>empty</h1>

@endforelse
@endsection

<h1>Home Page</h1>
<p>This is the Home Page</p>
