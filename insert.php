<?php
$servername = "localhost";
$username = "id13943903_2205";
$password = "Ppradipta65@";
$dbname = "id13943903_22051997";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (name, email, num, message)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["num"]."','".$_POST["message"]."')";

if ($conn->query($sql) === TRUE) {
  $conn->close();
  
  ini_set('display_errors',1);
    error_reporting(E_ALL);
    $from="ppradipta65@gmail.com";
    $to=$_POST["email"];
    $subject="Contact";
    $message = "Thank you for contacting us";
    $headers = "From:".$from;
    mail($to,$subject,$message,$headers);
  
  echo "<script>
alert('Message Send Successfully');
window.location.href='https://covindin.000webhostapp.com';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>