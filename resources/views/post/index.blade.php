<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Post List</h1>

<table>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->active }}</td>
            <td>{{ $post->title }}</td>
        </tr>
    @endforeach
</table>
{{ $posts->appends(request()->input())->links() }}
</body>
</html>
