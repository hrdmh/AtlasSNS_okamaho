<x-login-layout>


  <h2>機能を実装していきましょう。</h2>

  {!! Form::open(['url' => '/post']) !!}

  {{ Form::label('post') }}
  {{ Form::text('post',null,['class' => 'input']) }}

  {{ Form::submit('投稿') }}

  {!! Form::close() !!}


</x-login-layout>
