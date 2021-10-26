<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('categories.store')}}">
    <input type="text" name="title">
    <input type="image" name="image">
    <input type="number" name="jobs_count">
    <input type="text" name="sort">
</form>
</body>
</html>
