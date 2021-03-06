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
        <form action="calchd-modal.php" method="post">

          <center>
            <img src="logo-armazenamento.png" alt="Imagem de página não encontrada" width="360" height="120" class="center" />
            <p>Quantas câmeras serão gravadas?</p>
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

            <p>Quantos dias serão gravados?</p>
            <input type="number" min="0" name=days value="30"> <br>

            <br>
            <br>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Calcular</button>
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
                    echo "<script type='text/javascript'> $(calc-modal.php).ready(function(){ $('#myModal').modal('show');});</script>";


                } else {
                    echo "Insira os dados acima para estimar o HD necessário.";
                };
            ?>
        </center>

      </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Verifique o armazenamento necessário</h4>
                    </div>

                    <div class="modal-body">
                        <p>Você precisa de 7 TB de armazenamento, consulte os HD's disponíveis clicando no botão abaixo.</a>.</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
                        <button type="button" class="btn btn-success" onclick='location.href="https://www.intelbras.com/pt-br/discos-rigidos-para-cftv-hds-wd-purpletm"'>Verificar HD's</button>

                    </div>

                </div>

            </div>
        </div>

    </div>

  </section>

</body>
</html>
