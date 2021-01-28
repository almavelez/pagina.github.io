<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Webapp | Aplicación para autentificarse.</title>
    <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="resources/bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="resources/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Webapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca</a>
            </li>          
          </ul>  
          <span class="text-white">
              Bienvenido : <?php echo $_SESSION['miSesion']['nombre']; ?>
           </span>&nbsp;&nbsp;
          <a class="btn btn-secondary" href="../controller/salir.class.php">Cerar Sesión</a>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
           <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="../resources/images/1.jpg" width="100px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SKATEBOARD SET 1</h5>
        <p class="card-text">This is a pack of skateboards made of aluminum and fiberglass
$ 9,900.</p>
      </div>
        <div class="card-footer">
          <form method="post" action ="pedido.class.php">
          <button class= "btn btn-primary">Comprar</button>
      </form>
  </div>
</div>
</div>
  <div class="col">
    <div class="card">
      <img src="../resources/images/dos.jpg" width="100px"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SKATEBOARD SET 2</h5>
        <p class="card-text">This is a pack of skateboards made of aluminum and fiberglass
$ 8,800.</p>
      </div>
      <div class="card-footer">
          <form method="post" action ="pedido.class.php">
          <button class= "btn btn-primary">Comprar</button>
      </form>
  </div>
    </div>
    </div>
  <div class="col">
    <div class="card">
      <img src="../resources/images/tres.jpg" width="100px"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SKATEBOARD SET 3</h5>
        <p class="card-text">This is a pack of skateboards made of aluminum and fiberglass
$ 13,500.</p>
      </div>
      <div class="card-footer">
          <form method="post" action ="pedido.class.php">
          <button class= "btn btn-primary">Comprar</button>
      </form>
  </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../resources/images/cuatro.jpg" width="100px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SKATEBOARD SET 4</h5>
        <p class="card-text">Skates for ice skating made of leather.
$ 20,000.</p>
      </div>
      <div class="card-footer">
          <form method="post" action ="pedido.class.php">
          <button class= "btn btn-primary">Comprar</button>
      </form>
  </div>
    </div>
  </div>
  </div>


          
        </div>
      </div>
      <hr>

      <div class="container"> 
        
                  
		  <hr>	
      </div> <!-- /container -->

    </main>

    <footer class="footer">
      <div class="container">
        <p>
          &copy; 2021 Webapp
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resources/bootstrap/js/jquery-3.5.1.js"></script> 
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
