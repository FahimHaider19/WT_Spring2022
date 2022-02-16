<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php

?>
  <form action="../Control/action_page.php" method="post">
    <h1>Registration</h1>
    <hr>
    <table>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
      </tr>
        <td>Age:</td>
        <td><input type="number" name="age"></td>
      </tr>
      <tr>
        <td>Designation:</td>
        <td>
          <input type=radio name="designation" value="Junior Programmer"> Junior Programmer
          <input type=radio name="designation" value="Senior Programmer"> Senior Programmer
          <input type=radio name="designation" value="project Lead"> project Lead
        </td>
      </tr>
      <tr>
        <td>Preferred Language:</td>
        <td>
            <input type="checkbox" name=checkbox1 value="JAVA"> JAVA
            <input type="checkbox" name=checkbox2 value="PHP"> PHP
          <input type="checkbox" name=checkbox3 value="C++"> C++
        </td>
      </tr>
      <tr>
          <td>Email:</td>
          <td><input type="text" name=email></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Please Choose a file:</td>
        <td><input type="file" name='imageFile'><br></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Submit">
          <input type="reset">
        </td>
        </tr>
    </table>
  </form>
</body>
</html>