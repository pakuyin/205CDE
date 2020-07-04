<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$Number of people = $_POST['Number of people'];
$gender = $_POST['gender'];
$bdaymonth = $_POST['bdaymonth'];
$tripDuration = $_POST['tripDuration'];
$start = $_POST['start'];
$end = $_POST['end'];
$comment = $_POST['comment'];
?>

if (!empty($fname) || !empty($lname) || !empty($email) || !empty($mobile) || !empty($Number of people) || !empty($gender) || 
!empty($bdaymonth) || !empty($tripDuration) || !empty($start) || !empty($end) || !empty($comment) || {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  #dbname = "followme";

  //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, dbname);

  if (mysqli_connect_error()) {
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
  $SELECT = "SELECT email FROM followme WHERE email = ? Limit 1";
  $INSERT = "INSERT Into followme (fname, lname, email, mobile, Number of people, gender, bdaymonth, tripDuration, start, end,
comment) values(?,?,?,?,?,?,?,?,?,?,?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind-param("s",$email)';
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rmun = $stmt->num_rows;
  
  if ($rnum==0) {
	$stnt->close();

	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("sssiississs",$fname, $lname, $email, $mobile, $Number of people, $gender, $bdaymonth, $tripDuration, $start, $end,
$comment);
 	$stmt->execute();
	echo "New record inserted sucessfully";
  }
  else{
	echo "Someone laready register using this email";
  }
  $stmt->close();
  $conn->close();
}
}
else{
  echo "All field are required";
  die();
}
?>