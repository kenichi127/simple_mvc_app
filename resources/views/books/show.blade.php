@extends('master')

@section('content')
<div class="container">
<p><a href="/books/{{$book->id}}/edit">edit</a>
<p><a href="/books">back</a></p>
   <h2> Book # {{ $book->id }}:{{ $book->title }}   </h2>
   <p>{{ $book->description }}</p>
</div>
@endsection
