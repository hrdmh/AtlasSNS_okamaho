<x-login-layout>

  <div class="">

    <div class="form-group">

      <img src="{{ $iconPath }}" alt="{{ Auth::user()->username }}のアイコン">
      <form method="POST" action="/top" accept-charset="UTF-8">
      @csrf
        <input name="post" placeholder="投稿内容を入力してください" type="text">
        <button type="submit" class="btn btn-post create-right"><img src="images/post.png" alt="送信"></button>
      </form>

    </div>
  </div>

  <div>
    @foreach($lists as $list)
    <p>{{ $list -> user -> username }}</p>
    <p>{{ $list -> post }}</p>
    <p>{{ $list -> created_at }}</p>
    <div class="content">
        <!-- 投稿の編集ボタン -->
        <a class="js-modal-open" href="" post="{{ $list->post }}" post_id="{{ $list->id }}">編集</a>
    </div>
    @endforeach
  </div>

  <!-- モーダルの中身 -->
    <div class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <form action="" method="">
          <textarea name="" class="modal_post"></textarea>
            <input type="hidden" name="" class="modal_id" value="">
            <input type="submit" value="更新">
              {{ csrf_field() }}
        </form>
      </div>
    </div>


</x-login-layout>
