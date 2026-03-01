<x-login-layout>

<div>
  <form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="検索ワード">
    <button type="submit">検索</button>
</form>

</div>





</x-login-layout>
