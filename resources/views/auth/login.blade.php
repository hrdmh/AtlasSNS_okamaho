<x-logout-layout>

  <div class="LoginForm">
    <!-- 適切なURLを入力してください -->
    {!! Form::open(['url' => '/login']) !!}

    <h2>AtlasSNSへようこそ</h2>

    <div>
      {{ Form::label('email') }}
      {{ Form::text('email',null,['class' => 'input']) }}
    </div>
    <div>
      {{ Form::label('password') }}
      {{ Form::password('password',['class' => 'input']) }}
    </div>

    {{ Form::submit('ログイン') }}

    <p class=""><a href="register">新規ユーザーの方はこちら</a></p>

    {!! Form::close() !!}
  </div>

</x-logout-layout>
