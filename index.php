<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="form.php" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input required type="text" name="first_name" placeholder="Enter your first name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input required type="text" name="last_name" placeholder="Enter your last name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input required type="email" name="email" placeholder="Enter your email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input required type="password" name="pass_word" placeholder="Enter your password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input required type="password" name="confirm_password" placeholder="Confirm your password"></td>
            </tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>