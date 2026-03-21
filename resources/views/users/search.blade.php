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

  <div>
    @foreach($userlists as $userlist)
    <p>{{ $userlist -> icon_image }}</p>
    <p>{{ $userlist -> user -> username }}</p>
    </div>
    @endforeach
  </div>




</x-login-layout>
