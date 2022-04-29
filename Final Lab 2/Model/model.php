<?php
class DBClass{ 
    private $connection;

    function __construct($serverName, $username, $password, $databaseName)
    {
        $this->openConnection($serverName, $username, $password, $databaseName);
    }
    function openConnection($serverName, $username, $password, $databaseName)
    {
        $this->connection = new mysqli($serverName, $username, $password, $databaseName);
        if(!$this->connection->connect_error){
            echo "Connection successful<br>";
        }
        else 
            echo "Connection Error:".$this->connection->connect_error.'<br>';
    }
    function insertData($tableName, $firstname, $lastname, $age, $designation, $preferredLanguage, $email, $password, $filename)
    {
        $sql = "INSERT INTO $tableName(firstname, lastname, age, designation, preferredLanguage, email, password, filename) VALUES('$firstname', '$lastname', '$age', '$designation', '$preferredLanguage', '$email', '$password', '$filename')";
        if($this->connection->query($sql) === TRUE){
            echo "Data insertion successful<br>";
        }
        else 
            echo $this->connection->error.'<br>'; 
    }
    function connectionClose()
    {
        $this->connection->close();
    }
}
?>