<?php
session_start();

$conn = mysqli_connect(
  'database-1.cobq0flrbsyq.us-east-2.rds.amazonaws.com',
  'admin',
  'Miranda.10',
  'crud_sencillo'
) or die(mysqli_erro($mysqli));

/*if(isset($conn)){
  echo 'db connected';
}*/

?>