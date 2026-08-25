<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>
    <h1>Blogs</h1>

    @foreach ($blogs as $blog)
        <h2>{{ $blog->title }}</h2>

        <ul>
            <li>{{ $blog->content }}</li>
            <li>{{ $blog->user->name }}</li>
        </ul>
    @endforeach
</body>
</html>