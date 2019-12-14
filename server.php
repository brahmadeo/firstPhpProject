<?php 
session_start();

//initializing variables
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$con_password = $_POST['con_password'];

$errors = array();

//connect to the database
$db = new mysqli('localhost', 'root','', 'brahmadb');

if($db->connect_error){
    die('Connection Failed : '.$db->connect_error);
}else{
    $stmt = $db->prepare("insert into register(username, email, password, con_password) values(?,?,?,?)");
    $stmt->bind_param('ssss',$username, $email, $password, $con_password);
    $stmt->execute();
    echo "Successfully registered..";
    $stmt->close();
    $db->close();
}
?>