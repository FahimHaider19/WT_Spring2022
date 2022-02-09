<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $email = $gender = "";
$nameError=$radioError=$checkBoxError="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $age = $_POST["age"];
  
}
if (empty($fname) || empty($lname))
{
    echo "Please enter your name <br>";
}
else if(strlen($fname)<=5 || strlen($lname)<=5)
{
  echo "Name must be more than 5 charactrs<br>";
}

if(empty($_POST["designation"])){
  echo "Please select a radio <br>";
}

if(!isset($_POST["checkbox"])){
  echo "Please select a checkbox <br>";
}
if(empty($_POST["email"])){
  echo "Please enter an email<br>";
}
if(empty(($_POST["password"]))){
  echo "Please enter password<br>";
}
if(empty($_POST["age"])){
  echo "Please enter age<br>";
}
?>


<?php
echo "<h2>Your Input:</h2>";
echo "First Name : ".$fname;
echo "<br>";
echo "First Name : ".$lname;
echo "<br>";
echo "Email : ".$email;
echo "<br>";
echo "Age : ".$age;
echo "<br>";
echo "Password : ".$password;
echo "<br>";
?>

</body>
</html>