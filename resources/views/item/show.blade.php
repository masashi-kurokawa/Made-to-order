<h1>詳細</h1>
<p><a href="{{ route('item.index')}}"> Item List</a>　</p>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>memo</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->memo }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
    </tr>
</table>
