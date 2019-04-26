@extends('master')

@section('content')
<div class="container">
   <div class="text-center">
       <h2>Create a Book</h2>
   </div>
</div>
<form action={{ route('books.store') }} method="POST">
@csrf
<label for="">Title:</label>
<input type="text" name="title"/>
<label for="">Description:</label>
<input type="text"  name="description"/>
<a href="/books"><input type="submit" value="create"></a>
</form>
@endsection