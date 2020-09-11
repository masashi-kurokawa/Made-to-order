<h1>新規作成</h1>
<p><a href="{{ route('item.index')}}"> Item List</a></p>

<form action="{{ route('item.store')}}" method="POST">
    @csrf
    <p>Item名：<input type="text" name="name" value="{{old('name')}}"></p>
    <p>メモ：<input type="text" name="memo" value="{{old('memo')}}"></p>
    <input type="submit" value="登録">
</form>
