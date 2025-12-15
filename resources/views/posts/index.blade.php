<x-login-layout>

  <div class="">
    <div class="">
      <form method="POST" action="http://127.0.0.1:8000/top" accept-charset="UTF-8">
        <input name="_token" type="hidden" value="5iLaZKVO88ROCiOUXWGez4IbcfOJlE5WeGOf7BOi">
        <input name="post" placeholder="投稿内容を入力してください" type="text">
      </form>
    </div>
    <button type="submit" class="btn btn-post create-right"><img src="images/post.png" alt="送信"></button>
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
