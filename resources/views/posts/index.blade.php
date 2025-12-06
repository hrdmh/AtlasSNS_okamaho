<x-login-layout>


  <h2>機能を実装していきましょう。</h2>
<div class="NewPost">
  {!! Form::open(['url' => '/post']) !!}

  {{ Form::text('post',null,['class' => 'input']) }}

  {{ Form::submit('投稿') }}

  {!! Form::close() !!}
</div>

</x-login-layout>
