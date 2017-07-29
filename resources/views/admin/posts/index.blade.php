@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>User</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>body</th>
        <th>Wiew post</th>
        <th>Comments</th>
        <th>Created at</th>
        <th>Update</th>
    </thead>
    <tbody>

@if($posts)

    @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
            <td><img height="50" src="{{$post->photo ? $post ->photo->file : 'http://placehold.it/400x400'  }}" alt=""></td>
            <td>{{$post->title}}</td>
            <td>{{str_limit($post->body, 30)}}</td>
            <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
            <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
            <td>{{$post->created_at->diffForhumans()}}</td>
            <td>{{$post->updated_at->diffForhumans()}}</td>


        </tr>

    @endforeach
@endif
@stop