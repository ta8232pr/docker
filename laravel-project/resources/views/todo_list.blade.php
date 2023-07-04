<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    


<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>タスクの一覧</h2>
    <a href="/create-page">タスクを追加</a>
    <table border="1">
        <tr>
            <th>タスクの名前</th>
            <th>タスクの説明</th>
            <th>担当者の名前</th>
            <th>見積時間(h)</th>
            <th colspan="2">操作</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->task_name}}</td>
            <td>{{$todo->task_description}}</td>
            <td>{{$todo->assign_person_name}}</td>
            <td>{{$todo->estimate_hour}}</td>
            <td><a href="/edit-page/{{$todo->id}}">編集</a></td>
            <td><a href="/delete-page/{{$todo->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
    <p>
        見積時間の合計(h):{{$estimate_hour_sum}}
    </p>
</div>

<div>
    <a href="/member-list">メンバー一覧</a>
    <a href="/add-page">メンバー追加</a>
</div>

<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf



<a href="https://laracasts.com"><button class='btn btn-primary'>Laracasts</button></a>
<a href="https://laravel-news.com"><button class='btn btn-success'>News</button></a>
<a href="https://blog.laravel.com"><button class='btn btn-info'>Blog</button></a>
<a href="https://nova.laravel.com"><button class='btn btn-warning'>Nova</button></a>
<a href="https://forge.laravel.com"><button class='btn btn-danger'>Forge</button></a>
<a href="https://vapor.laravel.com"><button class='btn btn-link'>Vapor</button></a>
<a href="https://github.com/laravel/laravel"><button class='btn btn-primary'>GitHub</butto













</body>
</html>






