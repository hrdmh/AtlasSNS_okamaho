<x-login-layout>

  <div class="NewPost">
    {!! Form::open(['url' => '/top']) !!}

    {{ Form::text('post',null,['class' => 'input']) }}

    {{ Form::submit('投稿') }}

    {!! Form::close() !!}
  </div>



</x-login-layout>
