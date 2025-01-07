<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
</head>
<body>
  <a herf="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf 
</form> 
<h1>Dashboard Admin</h1>
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@else
<p>YOu are logged in!</p>
@endif

</body>

<footer>

</footer>

</html>