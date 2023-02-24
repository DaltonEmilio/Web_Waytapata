<?php
include_once('db.php');
//Llamo los datos con el nombre del formulario 
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$pais=$_POST['pais'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

        $conectar=conn();//Ejecuta mi bd funcion de la bd en el archivo db.php
        $sql="INSERT INTO usuarios (nombre, apellidos, pais, email, mensaje)
         VALUES ('$nombre', '$apellidos', '$pais', '$email', '$mensaje')";
        $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error".mysqli_error($conectar), E_USER_ERROR);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Medicina alternativa">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Dalton Enriquez">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/favicon.ico">
  <title>Waytapata</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
  <script defer src="index.js"></script>
</head>

<body>
  <header>
  </header>
  <main>
    <p class="v-df">¡Gracias por tu mensaje!</p>
    <a class="v-dfr" href="index.html">Volver</a>
  </main>
  <footer>
    <div class="contenedor">
      <div class="ff">
        <div class="d-a">
          <p><strong>Waytapata</strong>, web de medicina alternativa.</p>
          <p>Copyright &copy; <strong>Waytapata.</strong></p>
        </div>
        <div class="l-w-t"><img src="img/icono_waytapata.svg" alt="waytapata, web de medicina alternativa"></div>
        <div class="r-sociales">
          <p>Siguenos en:
          </p>
          <div class="rrr">
            <a class="footer-rs1" href="https://t.me/+pd5HQ8o39EBhNTRk"><img src="img/telegram.svg"
                alt="telegram, red social watapata"></a>
            <a class="footer-rs2" href="mailto:waytapata@protonmail.com"><img src="img/envelope.svg"
                alt="email, red social waitapata"></a>
            <a class="footer-rs3" href="https://twitter.com/wayta_pata"><img src="img/twitter.svg"
                alt="email, red social waytapata"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>