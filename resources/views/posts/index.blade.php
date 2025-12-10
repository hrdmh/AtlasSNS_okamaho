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
    @foreach($posts as $post)
    <tr>
      <tb>{{ $post -> user_id }}</tb>
      <tb>{{ $post -> post }}</tb>
      <tb>{{ $post -> create_at }}</tb>
    </tr>
    @endforeach
  </div>


</x-login-layout>
