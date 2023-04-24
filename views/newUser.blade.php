<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User</title>
    </head>
    <body>
        <h1>Create a new user</h1>
        <form method="post" action="/newUsers">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Create</button>
        </form>
    </body>
</html>
