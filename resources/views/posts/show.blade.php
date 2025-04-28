<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>

<div>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <small>Written by: {{ $post->author->name }}</small>
</div>

<hr>

<h2>Comments</h2>

@foreach ($post->comments as $comment)
    <div>
        <p><strong>{{ $comment->commenter_name }}</strong>: {{ $comment->comment }}</p>
    </div>
@endforeach

<hr>

<h2>Leave a Comment</h2>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/posts/{{ $post->id }}/comments">
    @csrf
    <div>
        <label>Name:</label><br>
        <input type="text" name="commenter_name" placeholder="Your Name">
    </div>
    <div>
        <label>Comment:</label><br>
        <textarea name="comment" placeholder="Your Comment"></textarea>
    </div>
    <button type="submit">Submit Comment</button>
</form>

</body>
</html>
