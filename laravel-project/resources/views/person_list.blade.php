<h1>member list</h1>

<a href="/add_member">メンバーを追加</a>
<table>
    <tr>
        <th>メンバーID</th>
        <th>名前</th>
        <th>年齢</th>
        <th>タスク数</th>
        <th>所要時間</th>
        <th colspan="2">操作</th>
    </tr>
    @foreach($persons as $person)
    <tr>
        <td>{{$person->id}}</td>
        <td>{{$person->name}}</td>
        <td>{{$person->age}}</td>
        <td>{{$person->tasks}}</td>
        <td>{{$person->estimated_hours}}</td>
        <td><a href="/edit-page-p/{$todo->id}">編集</a></td>
        <td><a href="/delete-page-p/{$todo->id}">削除</a></td>
    </tr>
    @endforeach
</table>
<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf