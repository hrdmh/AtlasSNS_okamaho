<x-login-layout>

  <div>
    <form action="{{ route('search') }}" method="GET">
      <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="検索ワード">
      <button type="submit" class=""><img src="images/search.png" alt="検索"></button>
    </form>
  </div>

  @if (!empty($keyword))
    <p>検索ワード：{{ $keyword }}</p>
  @endif

  <div class="user_list">
    @foreach($userlists as $userlist)
    <p><img src="{{ Storage::url('public/' . $userlist->icon_image) }}" alt="User Icon"></p>
    <p>{{ $userlist -> username }}</p>
    <button type="submit" class="">フォローする</button>
    <button type="submit" class="">フォロー解除する</button>
    </div>
    @endforeach
  </div>




</x-login-layout>
