<x-login-layout>

<div>
  <form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="検索ワード">
    <button type="submit" class=""><img src="image/search.png" alt="検索"></button>
  </form>
</div>

@if (!empty($keyword))
  <p>検索ワード：{{ $keyword }}</p>
@endif



</x-login-layout>
