<?php

  //Archivo de conexion
  include ('conexion.php');

//variables POST
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $consul=$_POST['consul'];

//Inserta los datos a la base
  $insertar="INSERT INTO contacto (fecha_reg,nombre,telefono,consulta) VALUES (current_timestamp(),'$name','$phone','$consul')";
  $ejecutar = mysqli_query($conexion,$insertar);

//BanderaQue manda una alerta si fueron guardados nuestros datos a la vista.
// if ($ejecutar) {
//   echo "<div class='alert alert-success' role='alert'>
//   <strong>Exito!</strong> Tus datos se han guardado.
//   </div>";
// }else {
//   echo "<div class='alert alert-danger' role='alert'>
//   <strong>Tus datos no se han guardado!</strong> Revisa tus campos.
//   </div>";
// }

?>
