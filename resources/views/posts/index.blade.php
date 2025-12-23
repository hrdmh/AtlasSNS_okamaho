<x-login-layout>

  <div class="">
    <div class="form-group">
      <form method="POST" action="/top" accept-charset="UTF-8">
      @csrf
        <input name="post" placeholder="投稿内容を入力してください" type="text">
        <button type="submit" class="btn btn-post create-right"><img src="images/post.png" alt="送信"></button>
      </form>
    </div>
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
