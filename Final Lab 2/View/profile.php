<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
    </head>
    <body>
        <script src="../Control/JS/script.js"></script>
        <form action="../Control/PHP/control.php" method="post" onclick='return validateJS()'>
        <h1>Registration</h1><hr>
            <table>
                <tr>
                    <td>First Name:</td> 
                    <td><input type="text" name="fname" onchange='validateFirstName()'> <br></td>
                    <td><span id='firstnameerror'></span><br></td>
                </tr>
                <tr>
                    <td>Last Name:</td> 
                    <td><input type="text" name="lname" onchange='validateLastName()'> <br> </td>
                    <td><span id='lastnameerror'></span><br></td>
                </tr>
                <tr>
                    <td>Age:</td> 
                    <td><input type="number" name="age" onchange='validateAge()'><br></td>
                    <td><span id='ageerror'></span><br></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td onclick='validateDesignation()'>
                        <input type=radio name="designation" value="Junior Programmer" > Junior Programmer
                        <input type=radio name="designation" value="Senior Programmer" > Senior Programmer
                        <input type=radio name="designation" value="Project Lead" > Project Lead <br></td>
                    <td>
                    <span id='designationerror'></span><br></td>
                </tr>
                <tr>
                    <td>Preferred Language:</td>
                    <td onclick='validatePreferredLanguge()'>
                        <input type="checkbox" name="lang[]" value="JAVA" > JAVA
                        <input type="checkbox" name="lang[]" value="PHP" > PHP
                        <input type="checkbox" name="lang[]" value="C++" > C++ <br>
                    </td>
                    <td><span id='preferredlanguageerror'></span><br></td>
                </tr>
                <tr>
                    <td>Email:</td> 
                    <td><input type="text" name = "email" onchange='validateEmail()'><br></td>
                    <td><span id='emailerror'></span><br></td>
                </tr>
                <tr>
                    <td>Password:</td> 
                    <td><input type="password" name="password" onchange='validatePassword()'><br></td>
                    <td><span id='passworderror'></span><br></td>
                </tr>
                <tr>
                    <td>Please Choose a file:</td> 
                    <td><input type="file" name="file"><br></td>
                    <td><span id='fileerror'></span><br></td>
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