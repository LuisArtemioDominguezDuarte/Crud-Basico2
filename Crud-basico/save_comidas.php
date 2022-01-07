<?php

include('db.php');

if (isset($_POST['save_comidas'])) {
    echo 'guardo';
  $nombre = $_POST['nombre'];
  $description = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $query = "INSERT INTO comidas(nombre, descripcion, precio) VALUES ('$nombre', '$description','$precio')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Comida Guardada';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>