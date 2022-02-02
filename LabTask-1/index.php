<!DOCTYPE HTML>
<html>
    <head>

    </head>
    <body>
        <form action="action_page.php" method="post">
        <h1>Registration</h1>
        <hr>
        <table>
        <tr>
        <td>First Name:<td> 
        <td><input type="text" name="name"> <br><td/>
        <tr/>
        <tr>
            <td>Last Name:<td/> <td><input type="text" name="name"> <br> <td/>
        <tr/>
            <td>Age:<td/> <td><input type="number"> <br><td/>
        </tr>
        <tr>
        <td>Designation: <td/>
        <td><input type=radio name ="designation"> Junior Programmer
        <input type=radio name ="designation"> Senior Programmer
        <input type=radio name ="designation"> project Lead <br><td/>
        <tr/>
        <tr>
        <td>Preferred Language:<td>
        <td><input type="checkbox"> JAVA
        <input type="checkbox"> PHP
        <input type="checkbox"> C++ <br><td/>
        <tr/>
        <tr>
        <td/>Email:<td/> <td><input type="text" name = email> <br><td/>
        <tr/>
        <tr>
        <td>Password:<td/> <td><input type="password"> <br><td/>
        <tr/>
        <tr>
        <td>Please Choose a file:<td/> <td><input type="file"><br><td/>
        <tr/>
        </form>
        <tr>
        <td><input type="submit" value="Submit"><td>
        <td><input type="reset"><td>
        <tr/>
    </body>
</html>