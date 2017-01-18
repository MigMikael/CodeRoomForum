@extends('template')

@section('title', 'Forum')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone mdl-cell--12-col-tablet" style="text-align: center">
        <h1>{{ $forum->title }}</h1>
        <hr>
        <h4>Discussion</h4>
    </div>

    <div class="mdl-cell mdl-cell--12-col" style="margin: 0% 10% 0% 10%">
        <ul class="mdl-list">
            @foreach($forum->discussions as $discussion)
                <a href="{{ url('/discussion/'.$discussion->id) }}">
                <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" style="margin-bottom: 1%">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-avatar">person</i>
                        <span>
                            {{ $discussion->title }}
                        </span>
                        <span class="mdl-list__item-text-body">
                            {{ $discussion->description }}
                        </span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                        <span class="mdl-chip mdl-chip--contact">
                            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">
                                {{ $discussion->topics->count() }}
                            </span>
                            <span class="mdl-chip__text">Topic</span>
                        </span>
                    </span>
                </li>
                </a>
            @endforeach
        </ul>
    </div>

    <a href="{{ url('discussion/create') }}" id="bottom-right-button"
       class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
        New Discussion
    </a>
@stop