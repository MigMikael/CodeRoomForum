@extends('template')

@section('title', 'Create Discussion')

@section('content')
    {!! Form::open(['url' => '/discussion']) !!}
    @include('discussion._form')
    {!! Form::close() !!}
@stop
