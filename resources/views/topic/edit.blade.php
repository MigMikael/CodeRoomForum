@extends('template')

@section('title', 'Edit Topic')

@section('content')
    {!! Form::model($topic, ['method'=> 'PATCH','url' => '/topic/'.$topic->id]) !!}
    @include('topic._form')
    {!! Form::close() !!}
@stop