 <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$dbcon=mysqli_connect("localhost","root","root");



mysqli_select_db($dbcon,"says");  


$name= $_POST['name'];
$rollnumber= $_POST['rollnumber'];
$roomnumber= $_POST['roomnumber'];
$problem= $_POST['problem'];

$sql = "INSERT INTO complaint ( user_name, user_roll,user_room, complaint) VALUES ('$name', '$rollnumber', '$roomnumber','$problem')";
mysqli_query($dbcon, $sql);

//if (mysqli_query($dbcon, $sql)) {
 //   echo "New record created successfully";
//} else {
 //   echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
//}

mysqli_close($dbcon);


include('booked.php');
?>	
