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
<form action="{{route('jobs.store')}}">
    <input type="text" name="category">
    <input type="text" name="location">
    <input type="email" name="job_type">
    <input type="date" name="salary">
    <input type="password" name="employer">
    <input type="password" name="industry">
    <input type="password" name="level">
    <input type="password" name="experience">
    <input type="submit" value="grancum">
</form>
</body>
</html>
