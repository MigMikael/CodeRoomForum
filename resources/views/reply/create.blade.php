{!! Form::open(['url' => '/reply']) !!}

{!! Form::hidden('topic_id', $t->id) !!}

{!! Form::hidden('user_id', 1) !!}

{!! Form::textarea('content') !!}
<br>
<input type="submit" value="reply"
       class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">

{!! Form::close() !!}
