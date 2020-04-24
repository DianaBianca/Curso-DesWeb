<?require_once "validador_acesso.php"?>
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
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
        
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center" style="text-align: center; ">
                  <a href="abrir_chamado.php" style="text-decoration: none;">
                    <img src="imagens/formulario_abrir_chamado.png" width="70" height="70">
                    <h4>Abrir Chamado </h4>
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center" style="text-align: center;">
                  <a href="consultar_chamado.php" style="text-decoration: none;" >
                    <img src="imagens/formulario_consultar_chamado.png" width="70" height="70">
                    <h4>Consultar Chamado </h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>