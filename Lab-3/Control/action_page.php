<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = $lname = $age = $password = $email = $designation = "";
	
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$age = $_POST["age"];
		$designation = $_POST["designation"];
		
		$checkbox = array();

		if (empty($fname) || empty($lname)){
				echo "Please enter your name <br>";
		}
		else if(strlen($fname)<=5 || strlen($lname)<=5){
			echo "Name must be more than 5 charactrs<br>";
		}

		if(empty($_POST["designation"])){
			echo "Please select a radio <br>";
		}

		if(!isset($_POST["checkbox1"]) && !isset($_POST["checkbox2"]) && !isset($_POST["checkbox3"])){
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

		/*if($_FILES['imageFile']['type'] != 'image/jpg'){
			echo  "Uploaded file is not in .jpg format <br>";
		}
		else if($_FILES['imageFile']['size']>2048){
			echo "File size is greater than 2MB.<br>";
		}
		else if(move_uploaded_file($_FILES['imageFile']['tmp_name'], '../Files/'.$fname.$lname.date('Y-m-d').'jpg')){
			echo 'File uploaded successfully.<br>';
		}
		else{
			echo "File upload failed<br>";
		}*/


		$pl = array();
		if(isset($_POST['checkbox1'])){
			array_push($pl, $_POST['checkbox1']);
		}
		if(isset($_POST['checkbox2'])){
			array_push($pl, $_POST['checkbox2']);
		}
		if(isset($_POST['checkbox3'])){
			array_push($pl, $_POST['checkbox3']);
		}

		$JSON_ARRAY = array(
			"firstName" => $fname,
			"lastName" => $lname,
			"email" => $email,
			"password" => $password,
			"age" => $age,
			"designation" => $designation,
			"prefferedLanguage" => $pl
		);

		$JSON = json_encode($JSON_ARRAY);
		$FILE = 'data.json';
		file_put_contents('data.json', $JSON, FILE_APPEND);
		echo "Form info saved as json<br>";
	}
?>

</body>
</html>