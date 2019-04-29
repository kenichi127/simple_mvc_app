@extends('master')

@section('content')
<div class="container">
   <div class="text-center">
       <h2>Delete a Book</h2>
   </div>
</div>
<form action="/books/{{ $book->id}}/delete" method="POST">
@csrf
<label>Is it OK?</label>
<input type="submit" value="ok"><input type="submit" value="not ok">
</form>
@endsection