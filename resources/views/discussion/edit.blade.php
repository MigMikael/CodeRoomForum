@extends('template')

@section('title', 'Edit Discussion')

@section('content')
    {!! Form::model($discussion, ['method'=> 'PATCH','url' => '/discussion/'.$discussion->id]) !!}
    @include('discussion._form')
    {!! Form::close() !!}
@stop