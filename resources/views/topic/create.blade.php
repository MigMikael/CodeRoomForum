@extends('template')

@section('title', 'Create Topic')

@section('content')
    {!! Form::open(['url' => '/topic']) !!}
    @include('topic._form')
    {!! Form::close() !!}
@stop