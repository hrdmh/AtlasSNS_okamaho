<x-logout-layout>

  <div class="login-form">

    <div class="box">
    <!-- 適切なURLを入力してください -->
    {!! Form::open(['url' => '/login']) !!}

    <h2>AtlasSNSへようこそ</h2>

    <div class="form-group">
      {{ Form::label('email') }}
      {{ Form::text('email',null,['class' => 'input']) }}
    </div>
    <div class="form-group">
      {{ Form::label('password') }}
      {{ Form::password('password',['class' => 'input']) }}
    </div>

    {{ Form::submit('ログイン') }}

    <p class=""><a href="register">新規ユーザーの方はこちら</a></p>

    </div>

    {!! Form::close() !!}
  </div>

</x-logout-layout>
