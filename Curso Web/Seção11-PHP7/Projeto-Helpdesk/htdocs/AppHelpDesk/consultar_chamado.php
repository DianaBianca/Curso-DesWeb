
<? 
require_once "validador_acesso.php";
  
?>

<?

  //array de chamados

  $chamados = array();
  //http://php.net/manual/pt_BR/function.fopen.php
  //abrir arquivo.hd
  $arquivo = fopen('../../app_help_desk/arquivo.hd','r');

  //enquato houverem registros (linhas) a serem recuperados
  while(!feof($arquivo)){ //End Of File//testa pelo fim do arquivo
    //linhas
    $registro = fgets($arquivo);//recupera a linha
    $chamados[] = $registro;
  }

  //fechando o arquivo.hd
  fclose($arquivo);

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
          SAIR
          </a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <? foreach($chamados as $chamado){ ?>

              <?
                $chamado_dados = explode('#', $chamado);
               
                //o perfil identificado é adm ou us er
                if ($_SESSION['perfil_id'] == 2) {
                  //so vai exibir o chamado que o usuario criou
                  if ($_SESSION['id']!= $chamado_dados[0]) {
                    continue;
                  }
                }

                if(count($chamado_dados) < 3){
                  continue;
                }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <h5 class="card-title"><?= $chamado_dados[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2]?></h6>
                  <p class="card-text"><?= $chamado_dados[3]?></p>
                  
                </div>
              </div>

              <? } ?>

              <div class="row mt-5" id="voltar">
                <div class="col-6" >
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>