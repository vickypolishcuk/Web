<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student</title>
        <style>
            h1, form {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Registration of students</h1>
        <form method="post" action="/newStudents">
            @csrf
            <label for="firstName">FirstName:</label>
            <input type="text" name="firstName" id="firstName" placeholder="firstName">
            <br>
            <label for="lastName">LastName:</label>
            <input type="text" name="lastName" id="lastName" placeholder="lastName">
            <br>
            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" placeholder="surname">
            <br>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" placeholder="099-69-69-229" pattern="0[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{3}">
            <br>
            <label for="IdCard">IdCard:</label>
            <input type="text" name="IdCard" id="IdCard" placeholder="NF0963545">
            <br>
            <button type="submit">Create</button>
        </form>
    </body>
</html>
