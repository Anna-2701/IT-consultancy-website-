<?php
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// database connection
$conn = new mysqli('localhost','root,','ITPROJECT');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into the registration(name,age,phone,email,message) values(? ? ? ? ?)");
    $stmt->bind_param("siiss",$name,$age,$phone,$email,$message);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
