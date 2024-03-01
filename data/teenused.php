<!doctype html>
<html lang="et">
    <head>
        <title>PHP ja Bootstrap</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />





        <style>

    .nav-link:hover {
      background-color: blue;
      color: white !important;
      padding: 5px 10px;
      border-radius: 5px;
    }

    @media (max-width: 767px) {
    
      .text-mobile-center {
        text-align: center !important;
      }
    }
  </style>


 


    </head>

    <body>







     
   
    <div class="container">

<div class="text-end text-mobile-center">

  
     
<img src="../data/env.png" alt="envelope" width="18" height="18">
<a  href="mailto:raivopadu@gmail.com?subject=your title&body=TThe message"></i>raivopadu@gmail.com</a>
<img src="../data/hp.png" alt="klapid" width="18" height="18">
+372 58 53 63 89

<a href="https://www.facebook.com" target="_blank"><img src="../data/fb.png" alt="facebook" width="18" height="18"></a>

<a href="https://www.twitter.com" target="_blank"><img src="../data/tw.png" alt="twitter" width="18" height="18"></a>



<a href="#" id="searchBtn">

<img src="../data/sc.png" alt="otsi" width="18" height="18">

</a>



<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel">Otsing</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
        <form>
          <div class="mb-3">
            <label for="searchInput" class="form-label">Sisestage otsingusõna:</label>
            <input type="text" class="form-control" id="searchInput" placeholder="Sisestage siia">
          </div>
          <button type="submit" class="btn btn-primary">Otsi</button>
        </form>
      </div>
    </div>
  </div>
</div>







</div>


     
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><p class="display-6">Raivo Padu</p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Avaleht</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tooted.php">Tooted</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="teenused.php">Teenused</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        





        






<div class="row" style ="margin-top:50px">

            <div class="col">

            <h1 class="display-3">Meie Tehtud Tööd</h1>
            <p class="lead">Seekord pääsesin selliselt</p>


            </div>
        </div>






<form id="minu_vorm" class="mt-3" method="GET"> 
  
  <p class="h4">Arvuta nelinurkse alal pindala:</p>

  <div class="mb-3 col-3">
    <label for="exampleInputEmail1" class="form-label">Sisesta kõrgus:</label>
    <input type="number" class="form-control" id="korgus" name="korgus">
  </div>

  <div class="mb-3 col-3">
    <label for="exampleInputPassword1" class="form-label">Sisesta laius:</label>
    <input type="number" class="form-control" id="laius" name="laius">
  </div>

  <div class="d-flex align-items-center mb-3"> 
    
  
  <select name="valik" id="valik" class="form-select w-25 me-3" aria-label="Default select example"> 
      
      <option selected>cm</option>
      <option value="1">mm</option>
      <option value="2">m</option>
      <option value="3">km</option>
    </select>


    <button type="submit" class="btn btn-primary" id="arvuta">Arvuta</button>

    



  </div>
</form>


 <div id="errorAlert" class="alert alert-danger d-none alert-dismissible fade show" role="alert" style="width: 350px">
    Palun sisesta positiivsed arvud.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>





<?php

$valitud_uhik_tekst = 'cm';


if (isset($_GET['valik'])) {
  $valitud_uhik = $_GET['valik'];

 
  switch ($valitud_uhik) {
      case '1':
          $valitud_uhik_tekst = 'mm';
          break;
      case '2':
          $valitud_uhik_tekst = 'm';
          break;
      case '3':
          $valitud_uhik_tekst = 'km';
          break;
      default:
          $valitud_uhik_tekst = 'cm';
          break;
  }
}



if (isset($_GET['korgus']) && isset($_GET['laius'])) {
  
    $korgus = $_GET['korgus'];
    $laius = $_GET['laius'];

 

 
    $pindala = $korgus * $laius;

  
    echo '<div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="width: 350px">';
    echo 'Pindala on : ' . $pindala.' '.$valitud_uhik_tekst.' <sup>2</sup>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
    
} 


?>











        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>



        <!-- Bootstrap JS and dependencies -->
        <script>



document.getElementById('arvuta').addEventListener('click', function(event) {
    event.preventDefault();
    
    var korgusValue = document.getElementById("korgus").value;
    var laiusValue = document.getElementById("laius").value;

    if (korgusValue <= 0 || laiusValue <= 0 || isNaN(korgusValue) || isNaN(laiusValue)) {
        document.getElementById("errorAlert").classList.remove("d-none");
       
        document.getElementById("successAlert").classList.add("d-none");
    } else {
        document.getElementById("errorAlert").classList.add("d-none");
        document.getElementById("minu_vorm").submit();
    }
});




  document.getElementById('searchBtn').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('searchModal'));
    myModal.show();
  });
</script>

        


    </body>
</html>



