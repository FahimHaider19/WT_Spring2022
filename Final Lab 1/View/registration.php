
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
    </head>

    <body>
        <form action="../Control/registrationCheck.php" method="post">
        <h1>Registration</h1><hr>
            <table>
                <tr>
                    <td>First Name:</td> 
                    <td><input type="text" name="fname"> <br></td>
                </tr>
                <tr>
                    <td>Last Name:</td> <td><input type="text" name="lname"> <br> </td>
                </tr>
                <tr>
                    <td>Age:</td> <td><input type="number" name="age"> <br></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><input type=radio name="designation" value="Junior Programmer"> Junior Programmer
                    <input type=radio name="designation" value="Senior Programmer"> Senior Programmer
                    <input type=radio name="designation" value="Project Lead"> Project Lead <br></td>
                </tr>
                <tr>
                    <td>Preferred Language:</td>
                    <td>
                        <input type="checkbox" name="lang[]" value="JAVA"> JAVA
                        <input type="checkbox" name="lang[]" value="PHP"> PHP
                        <input type="checkbox" name="lang[]" value="C++"> C++ <br>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td> <td><input type="text" name = "email"> <br></td>
                </tr>
                <tr>
                    <td>Password:</td> <td><input type="password" name="password"> <br></td>
                </tr>
                <tr>
                    <td>Please Choose a file:</td> <td><input type="file" name="file"><br></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit">
                        <input type="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>