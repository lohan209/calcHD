<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calculadora de HD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">
    <link rel="stylesheet" type="text/css" href=../css/style.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <section>

    <div class="container">

      <div class="box">
        <form action="mibocam3.php" method="post">

          <center>
            <img class="img" src="../img/mibocam-branco.svg" alt="Imagem de página não encontrada" width="400" height="200" class="center" />

            <p>Qual modo de gravavação?</p>

            <button name="im" value="Detecção de movimento"><img src="../movimento.svg"></button>
            <button name="im" value="Detecção de humanos"><img src="../humanos.svg"></button>
            <button name="im" value="Detecção de ruído"><img src="../ruido.svg"></button>
            <button name="im" value="Regular"><img src="..//regular.svg"></button>
          </center>
        </form>
    </div>

  </section>

</body>
</html>
<?php
echo $_POST['im'];
?>
