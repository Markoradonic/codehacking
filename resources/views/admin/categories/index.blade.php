@extends('layouts.admin')


@section('content')


    <h1>Category</h1>


    <div class="col-sm-6">
                {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store', 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
    </div>


    <div class="col-sm-6">
        @if($categories)
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Created data</th>
                </tr>
                </thead>
                @foreach($categories as $category)
                    <tbody>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-default">{{$category->name}}</a> </td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        @endif
    </div>


    @stop