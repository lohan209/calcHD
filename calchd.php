<!DOCTYPE html>
<?php
    if(isset($_POST["ncam"])){
        $ncam = $_POST["ncam"];
        $bitrate = $_POST["bitrate"];
        $hour = $_POST["hour"];
        $days = $_POST["days"];

        $bit_total = ((($ncam*$bitrate)/8)*3600)*$hour*$days;

        $bit_tb = ($bit_total / 1000000000);

        $bit_tb_p = ($bit_tb/100)*5;

        $bit_tb = ceil($bit_tb - $bit_tb_p);
        $msg = nl2br("Você precisa de ".$bit_tb." TB de armazenamento, consulte \n os HD's disponíveis clicando <a href='https://www.intelbras.com/pt-br/discos-rigidos-para-cftv-hds-wd-purpletm'>aqui</a>.");

    } else {
        $ncam = "16";
        $bitrate = 2048;
        $hour = "24";
        $days = "30";
        $msg = "Insira os dados acima para estimar o HD necessário.";
    };
?>

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
        <br>
        <br>
        <br>
        <div class="b1">
            <form action="calchd.php" method="post">

              <center>
                <img src="logo-armazenamento.png" alt="Imagem de página não encontrada" class="center logo img-fluid" />
                <p>Quantas câmeras serão gravadas?</p>
                <input type="number" min="0" class=ncam name=ncam value="<?php echo (isset($ncam))?$ncam:'';?>"> <br>

                <p>Qual será o bit rate utilizado?</p>
                <select name="bitrate" class="bitrate" name=bitrate value="<?php echo (isset($bitrate))?$bitrate:'';?> selected">
                	<option value="bitrate" disabled> Selecione o valor de bit rate.</option>
                    <option value="32"<?=$bitrate == '32' ? ' selected="selected"' : '';?>>32</option>
                    <option value="64"<?=$bitrate == '64' ? ' selected="selected"' : '';?>>64</option>
                    <option value="128"<?=$bitrate == '128' ? ' selected="selected"' : '';?>>128</option>
                    <option value="256"<?=$bitrate == '256' ? ' selected="selected"' : '';?>>256</option>
                    <option value="512"<?=$bitrate == '512' ? ' selected="selected"' : '';?>>512</option>
                    <option value="1024"<?=$bitrate == '1024' ? ' selected="selected"' : '';?>>1024</option>
                    <option value="2048"<?=$bitrate == '2048' ? ' selected="selected"' : '';?>>2048</option>
                    <option value="4096"<?=$bitrate == '4096' ? ' selected="selected"' : '';?>>4096</option>
                    <option value="8192"<?=$bitrate == '8192' ? ' selected="selected"' : '';?>>8192</option>
                    <option value="10240"<?=$bitrate == '10240' ? ' selected="selected"' : '';?>>10240</option>
                    <option value="12288"<?=$bitrate == '12288' ? ' selected="selected"' : '';?>>12288</option>
                    <option value="14336"<?=$bitrate == '14336' ? ' selected="selected"' : '';?>>14336</option>

                </select>

                <p>Quantas horas por dia serão gravadas?</p>
                <input type="number" min="0" max="24" name=hour value="<?php echo (isset($hour))?$hour:'';?>"> <br>

                <p>Quantos dias serão gravados?</p>
                <input type="number" min="0" name=days value="<?php echo (isset($days))?$days:'';?>"> <br>

                <br>
                <br>
                <input type="submit" value="Calcular" class="calc">
                <br>
                <br>
              </center>
            </form> 

            <center>
                <?php echo (isset($msg))?$msg:'';?>
            </center>
        </div>
        <br>
        <br>
      </div>
    </div>

  </section>

</body>
</html>
