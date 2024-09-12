<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>Document</title>
</head>
<body>

    <!-- /  is route -->
<form action="/" method="post">
    @csrf

    <input type="text" name="username" id="" placeholder="enter your name">  <br>
    <input type="email" name="email" id="" placeholder="enter your email">  <br>
    <input type="password" name="password" id="" placeholder="enter your password"> <br>
   <button type="submit">submit</button>

</form>

</body>
</html>