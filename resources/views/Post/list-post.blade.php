@extends('Post.app');

@section('title','List posts')

@section('content')
<h2>List Posts</h2>
<hr>
<div class="row">

    @foreach ($postsList as $item)
    <div class="col-sm-12">
        {{-- <h2>
                <a href="{{ route("post.show/{$item->id}") }}">
        TITLE: {{ $item->title }}
        </a>
        </h2> --}}
        <h4>
            TITLE: {{ $item->title }}
        </h4>
        <h5>Created: {{ $item->created_at }}</h5>
        <p>{{ $item->content }}</p>
        <br>
    </div>
    @endforeach

</div>
@endsection
