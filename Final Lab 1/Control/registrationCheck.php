<?php 
    include "../Model/model.php";
    $fname;
    $lname;
    $age; 
    $designation; 
    $preferredLanguage; 
    $email; 
    $password; 
    $filename;

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $pLanguage="";
        $flag=true;
        if(isset($_POST['lang'])){
            foreach($_POST['lang'] as $l){
                if($flag==false) $pLanguage.=', ';
                $pLanguage.=$l;
                $flag=false;
            }
        }
            
        $designation=isset($_POST['designation']) ? $_POST['designation'] : "";
        $filename=isset($_POST['file']) ? $_POST['file'] : "";
        //echo $fname.$lname.$age.$email.$password.$pLanguage.$designation.$filename;

    }
    if(empty($fname) || empty($lname) || empty($age) || empty($designation) || empty($pLanguage) || empty($email) || empty($password) || empty($filename))
    {
        echo "Please insert all fields.";
    }
    else{
        $db = new DBClass('localhost', 'root', '', 'myDB');
        $db->insertData('person',$fname, $lname, $age, $designation, $pLanguage, $email, $password, $filename);
        $db->connectionClose();
    }

?>