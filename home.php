
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../soal/home.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../soal/soal1.php">Soal 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../soal/soal2.php">Soal 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <?php
    session_start();
    if (isset($_SESSION['login'])):
        echo "  <form class='form-inline my-2 my-lg-0'>
                    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
                    <a href='../soal/login.php' class='btn btn-outline-success my-2 my-sm-0' type='submit'>Logout</a>
                </form>";
     else :
        echo "  <form class='form-inline my-2 my-lg-0'>
                    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
                    <a href='../soal/login.php' class='btn btn-outline-success my-2 my-sm-0' type='submit'>Login</a>
                </form>";
     endif;
    ?>
  </div>
</nav>
<br>
    <img src="https://www.smkassalaambandung.sch.id/photos/1/logo/5a1e12ade5d4d.png" class="rounded mx-auto d-block" alt="..." width="200px" height="200px">
    <h1 style="text-align: center;">Selamat datang di website kami</h1>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>