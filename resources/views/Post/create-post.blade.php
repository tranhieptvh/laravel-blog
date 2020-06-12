@extends('Post.app')

@section('title','Create Post')

@section('content')
<h2>Create Post</h2>
<hr>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" rows="5" name="content"></textarea>
        </div>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url">
        </div>
        @error('url')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Create">

    </form>
</div>
@endsection
