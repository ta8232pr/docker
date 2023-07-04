<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>タスクを追加</h2>
    <form method="POST" action="/create">
        @csrf



        @if ($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
               <li style="color:red">{{$error}}</li>
            @endforeach
            </ul>
        @endif
        <p>
            タスクの名前：<input type="text" name="task_name">
        </p>
        <p>
            タスクの説明：<input type="text" name="task_description">
        </p>
        <p>
            担当者の名前：<select name="name" id="name">
                <option value=""></option>
                @foreach ($assign_persons as $assign_person)
                <option value="{{$assign_person->name}}">{{$assign_person->name}}</option>
                @endforeach
            </select>
        </p>
       
        <p>
            <span>見積時間(h)：</span><input type="number" name="estimate_hour">
        </p>
        <input type="submit" name="create" value="追加">
    </form>
    <a href="/">戻る</a>
</div>
<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf