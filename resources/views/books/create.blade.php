@extends('layouts.master')


@section('title')
    Show book
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
@if ($_POST)
  <h1>Book added: {{ $title }}</h1>
@else
  <form method="POST" action="/books/create">
    <input type="text" name="title"><br>
    <input type="submit">
  </form>
@endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
