<?php
require_once('../config.php');

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  $sql = "SELECT * FROM lecturer ORDER BY nama ASC ";
  $res = mysqli_query($con, $sql);
  $result = array();

  while($row = mysqli_fetch_array($res)){
    array_push($result, array(
      'nip' => $row[1],
      'nama' => $row[2],
      'mapel' => $row[3],
      'no_hp' => $row[4],
      'alamat' => $row[5],
      'photo' => $row[6]
    ));
  }

  echo json_encode(array(
    "message" => 1,
    "result" => $result
  ));
  mysqli_close($con);
}
 ?>
