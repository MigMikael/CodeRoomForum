@extends('template')

@section('title', 'Discussion')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone mdl-cell--12-col-tablet" style="text-align: left; padding-top: 0; margin-top: 0">
        <h1>{{ $discussion->title }}</h1>
        <h4>{{ $discussion->description }}</h4>
        <hr>
    </div>

    <div class="mdl-cell mdl-cell--5-col">
        <a href="{{ url('/topic/create/'.$discussion->id) }}" style="width: 94%"
           class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
            New Topic
        </a>
        <ul class="mdl-list">
        @foreach($discussion->topics as $topic)
        <a href="{{ url('/topic/'.$topic->id) }}">
            <li class="mdl-list__item @unless(Request::is('topic/*') && $t->id == $topic->id) mdl-shadow--2dp @endunless"
                style="margin-bottom: 1%; @if(Request::is('topic/*') && $t->id == $topic->id) background: #ECEFF1 @endif">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">person</i>
                    {{ $topic->title }}
                </span>

                @if(Request::is('topic/*') && $t->id == $topic->id)
                <span class="mdl-list__item-secondary-content">
                    <i class="material-icons">arrow_forward</i>
                </span>
                @endif
            </li>
        </a>
        @endforeach
        </ul>
    </div>
    <div class="mdl-cell mdl-cell--7-col" style="margin: 0">
        @if(Request::is('topic/*'))
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">{{ $t->title }}</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-card--expand">
                    {{ $t->content }}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        view
                    </a>
                </div>
                <div class="mdl-card__menu">
                    {!! Form::model($t, ['method' => 'DELETE', 'url'=>'topic/'.$topic->id]) !!}
                    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit">
                        <i class="material-icons">cancel</i>
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Reply</h2>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    @include('reply.create')
                </div>
            </div>

            @foreach($t->replies as $reply)
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">
                            userID: {{ $reply->user_id }}
                        </h2>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        {{ $reply->content }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@stop