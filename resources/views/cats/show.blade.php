@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
    <a href="{{ url('cats/'.$cat->id.'/edit') }}">
        <span class="glyphicon glyphicon-edit"></span>
        Edit
    </a>


    {!! Form::open(['url' => 'cats/'.$cat->id.'/delete']) !!}
    {{ method_field('DELETE') }}
    {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    <p>Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
@stop
@section('content')
    <p>Date of Birth: {{ $cat->date_of_birth }}</p>
    <p>
        @if ($cat->breed)
            Breed:
            {{ link_to('cats/breeds/'.$cat->breed->name,
            $cat->breed->name) }}
        @endif
    </p>
@stop
