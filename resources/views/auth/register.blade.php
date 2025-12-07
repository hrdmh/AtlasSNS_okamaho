<x-logout-layout>

<div class="Register">
    <!-- 適切なURLを入力してください -->
    {!! Form::open(['url' => '/register']) !!}

    <h2>新規ユーザー登録</h2>

    <div>
    {{ Form::label('ユーザー名') }}
    {{ Form::text('username',null,['class' => 'input']) }}
    </div>

    <div>
    {{ Form::label('メールアドレス') }}
    {{ Form::email('email',null,['class' => 'input']) }}
    </div>

    <div>
    {{ Form::label('パスワード') }}
    {{ Form::text('password',null,['class' => 'input']) }}
    </div>

    <div>
    {{ Form::label('パスワード確認') }}
    {{ Form::text('password_confirmation',null,['class' => 'input']) }}
    </div>

    {{ Form::submit('登録') }}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p><a href="login">ログイン画面へ戻る</a></p>

    {!! Form::close() !!}

</div>


</x-logout-layout>
