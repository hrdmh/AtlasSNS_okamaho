<x-login-layout>

  <div class="">
    <div class="NewPost">
      {!! Form::open(['url' => '/top']) !!}
      {{ Form::text('post',null,['class' => 'input', 'placeholder' => '投稿内容を入力してください']) }}
    </div>
    <button type="submit" class=""><img src="images/post.png" alt="送信"></button>
    {!! Form::close() !!}
  </div>

  <div>
    @foreach($list as $list)
    <tr>
      <tb>{{ $list -> user_id }}</tb>
      <tb>{{ $list -> post }}</tb>
      <tb>{{ $list -> create }}</tb>
    </tr>
    @endforeach
  </div>


</x-login-layout>
