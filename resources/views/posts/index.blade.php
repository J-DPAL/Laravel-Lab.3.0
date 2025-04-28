<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>

<h1>Blog Posts</h1>

@foreach ($posts as $post)
    <div>
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p>By: {{ $post->author->name }}</p>
    </div>
@endforeach

</body>
</html>



