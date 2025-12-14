<x-login-layout>

  <div class="">
    <div class="">
      {!! Form::open(['url' => '/top']) !!}
      {{ Form::text('post',null,['class' => 'input', 'placeholder' => '投稿内容を入力してください']) }}
    </div>
    <button type="submit" class="btn btn-post create-right"><img src="images/post.png" alt="送信"></button>
    {!! Form::close() !!}
  </div>

  <div>
    @foreach($lists as $list)
    <tr>
      <tb>{{ $list -> user_id }}</tb>
      <tb>{{ $list -> post }}</tb>
      <tb>{{ $list -> create_at }}</tb>
    </tr>
    @endforeach
  </div>


</x-login-layout>
