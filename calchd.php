<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calculadora de HD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">  
    <link rel="stylesheet" type="text/css" href=style.css>

</head>
<body>

  <section>

    <div class="container">

      <div class="box">
        <form action="calchd.php" method="post">

          <center>
            <img src="logo.png" alt="Imagem de página não encontrada" width="180" height="60" class="center" />
            <br>
            <p>Quantas câmeras serão gravadas:</p>
            <input type="number" min="0" class=ncam name=ncam> <br>

            <p>Qual será o bit rate utilizado?</p>
            <select name="bitrate" class="bitrate" name=bitrate>
                <option value="32">32</option>
                <option value="64">64</option>
                <option value="128">128</option>
                <option value="256">256</option>
                <option value="512">512</option>
                <option value="1024">1024</option>
                <option value="2048">2048</option>
                <option value="4096">4096</option>
                <option value="8192">8192</option>
            </select>

            <p>Quantas horas por dia serão gravadas?</p>
            <input type="number" min="0" max="24" name=hour> <br>

            <p>Quantos dias você deseja que seja gravado?</p>
            <input type="number" min="0" name=days> <br>

            <br>
            <br>
            <input type="submit" value="Calcular" class="calc">
            <br>
            <br>

            <div class=result>
	            <?php

	              $ncam = $_POST["ncam"];
	              $bitrate = $_POST["bitrate"];
	              $hour = $_POST["hour"];
	              $days = $_POST["days"];

	              $bit_total = ((($ncam*$bitrate)/8)*3600)*$hour*$days;
	              
	              $bit_tb = ($bit_total / 1000000000);

	              $bit_tb_p = ($bit_tb/100)*5;

	              $bit_tb = $bit_tb - $bit_tb_p;

	              if($bit_tb <= 1){
	                echo "É necessário 1 HD de 1TB   ";
	                echo $bit_tb;

	              }else{
	                $bit_tb = ceil($bit_tb);
	                echo "Você precisa de um HD que armazene ".$bit_tb." TB, consulte os HD's disponível clicando aqui";
	              }

	            ?>
        	</div>

          </center>
        </form> 

      </div>
    </div>

  </section>

</body>
</html>
