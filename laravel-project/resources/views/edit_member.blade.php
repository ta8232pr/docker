<h1>Member List</h1>                                                                                                 
<div>
    <h2>メンバー情報修正</h2>
    <form method="POST" action="/edit-m">
        @csrf
        <input type="hidden" name="id" value="{{$assign_person->id}}">
        <p>
            名前：<input type="text" name="name" value="{{$assign_person->name}}">
        </p>
         <p>
            年齢：<input type="text" name="age" value="{{$assign_person->age}}">
         </p>
         <p>
             効率：<input type="text" name="efficiency" value="{{$assign_person->efficiency}}">
         </p>
         <input type="submit" name="edit" value="修正">
     </form>
     <a href="/">戻る</a>
 </div>
 <a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf