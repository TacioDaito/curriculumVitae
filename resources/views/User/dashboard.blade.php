<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Welcome to the Dashboard</h1>
        {{-- <p>Hello, {{ $user->name }}</p>
        <p>Your email is: {{ $user->email }}</p>
        <p>Your role is: {{ $user->role }}</p> --}}
        <a href="{{ route('index') }}">Logout</a>
    </body>
</html>