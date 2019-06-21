<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calculadora de HD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">  
    <link rel="stylesheet" type="text/css" href=style.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <section>

    <div class="container">

      <div class="box">
        <form action="calchd.php" method="post">

          <center>
            <img src="logo-armazenamento.png" alt="Imagem de página não encontrada" width="360" height="120" class="center" />
            <p>Quantas câmeras serão gravadas:</p>
            <input type="number" min="0" class=ncam name=ncam value="16"> <br>

            <p>Qual será o bit rate utilizado?</p>
            <select name="bitrate" class="bitrate" name=bitrate value="2048">
            	<option value="bitrate" disabled> Selecione o valor de bit rate.</option>
                <option value="32">32</option>
                <option value="64">64</option>
                <option value="128">128</option>
                <option value="256">256</option>
                <option value="512">512</option>
                <option value="1024">1024</option>
                <option value="2048" selected>2048</option>
                <option value="4096">4096</option>
                <option value="8192">8192</option>
            </select>

            <p>Quantas horas por dia serão gravadas?</p>
            <input type="number" min="0" max="24" name=hour value="24"> <br>

            <p>Quantos dias você deseja que seja gravado?</p>
            <input type="number" min="0" name=days value="30"> <br>

            <br>
            <br>
            <input type="submit" value="Calcular" class="calc">
            <br>
            <br>
          </center>
        </form> 

        <center>
            <?php
            	if(isset($_POST["ncam"])){
					$ncam = $_POST["ncam"];
					$bitrate = $_POST["bitrate"];
					$hour = $_POST["hour"];
					$days = $_POST["days"];
					$seu_link = "http://www.imasters.com.br";

					$bit_total = ((($ncam*$bitrate)/8)*3600)*$hour*$days;

					$bit_tb = ($bit_total / 1000000000);

					$bit_tb_p = ($bit_tb/100)*5;

					$bit_tb = ceil($bit_tb - $bit_tb_p);
					echo nl2br("Você precisa de um HD que armazene ".$bit_tb." TB, consulte \n os HD's disponíveis clicando <a href='https://www.intelbras.com/pt-br/discos-rigidos-para-cftv-hds-wd-purpletm'>aqui</a>.");
				} else {
					echo "Insira os dados acima para estimar o HD necessário.";
				};
            ?>
        </center>

      </div>
    </div>

  </section>

</body>
</html>
