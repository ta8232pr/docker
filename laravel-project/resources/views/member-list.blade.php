<h1>Member List</h1>                                                                                                 
<div>
    <h2>メンバー一覧</h2>
    <a href="/add-page">メンバーを追加</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>効率</th>            
            <th colspan="2">操作</th>
        </tr>
        @foreach($assign_persons as $assign_person)
        <tr>
            <td>{{$assign_person->id}}</td>
            <td>{{$assign_person->name}}</td>
            <td>{{$assign_person->age}}</td>
            <td>{{$assign_person->efficiency}}</td>
            <td><a href="/edit-member/{{$assign_person->id}}">編集</a></td>
            <td><a href="/remove-member/{{$assign_person->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>

<div>
    <a href="/">タスク一覧に戻る</a>
</div>

<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf