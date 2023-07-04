<div>
    <h2>メンバーを削除</h2>
    <form method="POST" action="/remove/{{$assign_person->id}}">
        @csrf
        <p>
            名前：{{$assign_person->name}}
        </p>
        <p>
            年齢：{{$assign_person->age}}
        </p>
        <p>
            効率：{{$assign_person->efficiency}}
        </p>
        <input type="submit" name="remove" value="メンバーを削除">

    </form>
    <a href="/member-list">戻る</a>

</div>
<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf