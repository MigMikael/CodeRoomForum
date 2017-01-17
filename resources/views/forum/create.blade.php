@extends('template')

@section('title', 'Create Forum')

@section('content')
    {!! Form::open(['url' => '/forum']) !!}
    @include('forum._form')
    {!! Form::close() !!}
@stop