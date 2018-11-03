<?php
session_start(); 
if (isset($_SESSION['login'])) {

?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

      #myImg {
          border-radius: 5px;
          cursor: pointer;
          transition: 0.3s;
      }

      #myImg:hover {opacity: 0.7;}

      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
      }

      /* Modal Content (image) */
      .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
      }

      /* Caption of Modal Image */
      #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
      }

      /* Add Animation */
      .modal-content, #caption {    
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
      }

      @-webkit-keyframes zoom {
          from {-webkit-transform:scale(0)} 
          to {-webkit-transform:scale(1)}
      }

      @keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
      }

      /* The Close Button */
      .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
      }

      .close:hover,
      .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
      }

      /* 100% Image Width on Smaller Screens */
      @media only screen and (max-width: 700px){
          .modal-content {
              width: 100%;
          }
      }
      </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../soal/home.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" >
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
      <form class='form-inline my-2 my-lg-0'>
          <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
          <a href='../soal/login.php' class='btn btn-outline-success my-2 my-sm-0' type='submit'>Logout</a>
      </form> 
  </div>
</nav>

<br><br>
<div class="text-center">
  <img src="https://www.smkassalaambandung.sch.id/photos/1/logo/5a1e12ade5d4d.png" class="rounded" alt="..." width="200px" height="200px">
</div>
<center>
<div class="card" style="width: 90%">
<div style =" text-align: left;">
  <div class="card-header">
    Upload
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <form enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
    <p></p>
    <button type="submit" style="width: 100%;" name="upload" class="btn btn-primary">Upload</button>
  </div>
</form>
    </li>
    </ul>
    </div>
</div>
<?php
    if(isset($_POST['upload'])){
            $dir_upload = "images/";  
            $nama_file  = $_FILES['file']['name'];  
            if (is_uploaded_file($_FILES['file']['tmp_name'])) {   
            $cek = move_uploaded_file ($_FILES['file']['tmp_name'], 
            $dir_upload."$nama_file");  
            echo"<br>
                  <img src='$dir_upload/$nama_file' width='400px' heigt='400px' id='myImg'>
                  <!-- The Modal -->
                  <div id='myModal' class='modal'>
                    <span class='close'>&times;</span>
                    <img class='modal-content' id='img01'>
                    <div id='caption'></div>
                  </div>
                  <br>
                  <br>";
        }
      }

?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>

<?php } else {
  header("Location:login.php");
}?>