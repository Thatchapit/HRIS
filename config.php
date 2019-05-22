
<?php

// $serverName = "45.77.249.35"; //serverName\instanceName ถ้าฐานข้อมูลอยู่ในเครื่องเราใช้ localhost 
// $connectionInfo = array(
// "Database" => "HRIS_NEW",
// "UID" => "sa",
// "PWD" => "1020304050",
// "MultipleActiveResultSets"=>true,
// "CharacterSet"  => 'UTF-8'
// );

$hostname = "localhost";
$dbname = "ducklabc_hris";
$username = "root";
$password = "";
 
$conn = mysqli_connect($hostname,$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf8
mysqli_set_charset($conn,"utf8");

?>