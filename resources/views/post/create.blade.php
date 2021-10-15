<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Create new post</h1>

<form action="#">

{{--    dropdown view with dynamic 'name' or 'id' attribute--}}
    @include('partials.channels.dropdown',[ 'name_attribute'=> 'my_channel'])
</form>

</body>
</html>
