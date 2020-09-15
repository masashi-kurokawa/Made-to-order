<h1>編集</h1>
<p><a href="{{ route('item.index')}}"> Item List </a></p>

<form action="{{ route('item.update',$item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>Item名：<input type="text" name="name" value="{{ $item->name }}"></p>
    <p>メモ：<input type="text" name="memo" value="{{ $item->memo }}"></p>
    <input type="submit" value="編集">
</form>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
