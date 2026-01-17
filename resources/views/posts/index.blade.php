<x-login-layout>

  <div class="">

      @if($user -> icon_image)
      <img src="{{ asset($user->icon_image) }}" alt="アイコン">
      @endif

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
    <p>{{ $list -> user -> icon_image }}</p>
    <p>{{ $list -> user -> username }}</p>
    <p>{{ $list -> post }}</p>
    <p>{{ $list -> created_at }}</p>
    @endforeach
  </div>


</x-login-layout>
