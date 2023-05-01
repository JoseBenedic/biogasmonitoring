<?php
// $conn = mysqli_connect("localhost", "root", "", "iot_db");
// $sql = "SELECT * FROM iot_tbl";
// $result = $conn->query($sql);
//
// while ($row = $result->fetch_assoc()) {
//   if ($row['pH'] >= 0 && $row['pH'] < 6.5) {
//     $phformat = "warning";
//   }elseif ($row['pH'] >= 6.5 && $row['pH'] < 7.5){
//     $phformat = "success";
//   }else{
//     $phformat = "danger";
//   }
//   echo "<tr>
//   <td style='background: red;'>"  .$row["pH"]. "</td>
//   <td>" .$row["temp"]. "</td>
//   <td>" .$row["gas"]. "</td>
//   <td>" .$row["psi"]. "</td>
//   <td>" .$row["pa"]. "</td>
//   <td>" . $row["created_at"]."</td>
//   <tr>";
// }

$connection_string = 'mysql:dbname=iot_db;host=localhost';
$db_username = 'root';
$db_password = '';

try
{
  $conn = new PDO($connection_string, $db_username, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
  echo "Connection Failed: ".$e->getMessage();
}



 ?>
