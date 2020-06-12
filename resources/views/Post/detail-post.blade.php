@extends('Post.app');

@section('title','List posts')

@section('content')
<h2>Detail post</h2>
<hr>

<div class="row">
    @foreach ($post as $item)
    <div class="col-sm-12">
        <h4>TITLE: {{ $item->title }}</h4>
        <h5>Created: {{ $item->created_at }}</h5>
        <p>{{ $item->content }}</p>
        <br>
    </div>
    @endforeach
</div>
<hr>
@endsection

@section('comment')
<h2>Comments</h2>

@php
$comments = DB::table('comments')->where('post_id', "$item->id")->get();
// var_dump($comments);
@endphp

@foreach ($comments as $cmt)
<p>{{ $cmt->content_comment }}</p>
@endforeach

@endsection
