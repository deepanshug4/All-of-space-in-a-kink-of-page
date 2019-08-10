<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pnumber = $_POST['pnumber'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$squestion = $_POST['squestion'];
$sanswer = $_POST['sanswer'];


if (!empty($firstname) || !empty($lastname) || !empty($pnumber) || !empty($gender) || !empty($email) || !empty($user_id) || !empty($password) || !empty($squestion) || !empty($sanswer))
{
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "project";

  $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname)
  or die('Error connecting to MySQL server.');

  $query = "INSERT INTO register (firstname,lastname,pnumber,gender,email,user_id,password,squestion,sanswer) " .
    "VALUES ('$firstname', '$lastname', '$pnumber', '$gender', '$email', '$user_id', '$password', '$squestion', '$sanswer')";

    $result = mysqli_query($conn, $query)
    or die('Error querying database.');

    mysqli_close($conn);
  
  echo "Details saved successfully.";

} else {
  echo "All fields not available";
}

?>
