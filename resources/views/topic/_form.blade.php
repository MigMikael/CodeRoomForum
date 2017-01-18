@if(Request::is('topic/*/edit'))
    {!! Form::hidden('discussion_id', $topic->discussion->id) !!}
@else
    @if(isset($discussion))
        {!! Form::hidden('discussion_id', $discussion->id) !!}
    @else
        {!! Form::label('discussion_id', 'DiscussionID') !!}
        {!! Form::text('discussion_id') !!}
    @endif
@endif
{!! Form::hidden('user_id', 1) !!}

{!! Form::label('title', 'Title') !!}
{!! Form::text('title') !!}

{!! Form::label('content', 'Content') !!}
{!! Form::textarea('content') !!}

{!! Form::submit('create') !!}

