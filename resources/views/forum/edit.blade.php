@extends('template')

@section('title', 'Edit Forum')

@section('content')
    {!! Form::model($forum, ['method'=> 'PATCH','url' => '/forum/'.$forum->id]) !!}
    @include('forum._form')
    {!! Form::close() !!}
@stop