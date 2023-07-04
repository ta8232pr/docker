

<div>
    <h2>メンバー追加</h2>
    <form method="POST" action="/add">
        @csrf

        @if ($errors->any())
            <ul>
             @foreach ($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
             @endforeach
            </ul>
        @endif
        <p>
            名前：<input type="text" name="name">
        </p>
        <p>
            年齢：<input type="number" name="age">
        </p>
        <p>
            効率：<input type="number" name="efficiency">
        </p>
        <input type="submit" name="add" vaue="add">
    </form>
    <a href="/">戻る</a>

</div>
<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf