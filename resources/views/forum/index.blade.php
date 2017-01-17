@extends('template')

@section('title', 'Forum')

@section('content')
    @foreach($forums as $forum)
        <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-phone mdl-cell--2-col-tablet mdl-card mdl-shadow--2dp">
            <div class="mdl-card__media" style="text-align: center">
                <h1><b>{{ substr($forum->title, 0, 1) }}</b></h1>
            </div>
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">{{ $forum->title }}</h2>
            </div>
            <div class="mdl-card__supporting-text">

            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="{{ url('/forum/'.$forum->id) }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    view
                </a>
                <a href="{{ url('/forum/'.$forum->id.'/edit') }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    edit
                </a>
            </div>
            <div class="mdl-card__menu">
                {!! Form::model($forum, ['method' => 'DELETE', 'url'=>'badge/'.$forum->id]) !!}
                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit">
                    <i class="material-icons">cancel</i>
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach

    <a href="{{ url('forum/create') }}" id="bottom-right-button"
       class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
        Create
    </a>
@stop