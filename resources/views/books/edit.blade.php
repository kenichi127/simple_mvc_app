@extends('master')

@section('content')
<div class="container">
   <div class="text-center">
       <h2>Editting a Book</h2>
   </div>
</div>
<form action="/books/{{ $book->id}}/estore" method="POST">
@csrf
<label>Title:</label>
<input type="text" name="title" value="{{$book->title}}"/>
<label>Description:</label>
<input type="text"  name="description" value="{{$book->description}}"/>
<input type="submit" value="edit">
</form>
@endsection