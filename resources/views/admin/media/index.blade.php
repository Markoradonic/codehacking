@extends('layouts.admin')


@section('content')


    <h1>Media</h1>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>body</th>
            <th>Created at</th>
            <th>Update</th>
        </thead>
        <tbody>

        @if($photos)

            @foreach($photos as $photo)

                <tr>
                    <td>{{$photo->id}}</td>
                    {{--<td><a href="{{route('admin.posts.edit', $photo->id)}}">{{$photo->user->name}}</a></td>--}}
                    {{--<td>{{$photo->category ? $photo->category->name : 'Uncategorized'}}</td>--}}
                    {{--<td><img height="50" src="{{$photo->photo ? $photo ->photo->file : 'http://placehold.it/400x400'  }}" alt=""></td>--}}
                    {{--<td>{{$photo->title}}</td>--}}
                    <td>{{$photo->file}}</td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
                    <td><img src="{{$photo->file}}" height="30" alt=""></td>

                    {{--<td>{{$photo->updated_at->diffForhumans()}}</td>--}}

                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy', $photo->id]]) !!}


                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>


                </tr>

    @endforeach
    @endif




@stop