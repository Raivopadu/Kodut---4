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

  
     
<img src="data/env.png" alt="envelope" width="18" height="18">
<a  href="mailto:raivopadu@gmail.com?subject=your title&body=TThe message"></i>raivopadu@gmail.com</a>
<img src="data/hp.png" alt="klapid" width="18" height="18">
+372 58 53 63 89

<a href="https://www.facebook.com" target="_blank"><img src="data/fb.png" alt="facebook" width="18" height="18"></a>

<a href="https://www.twitter.com" target="_blank"><img src="data/tw.png" alt="twitter" width="18" height="18"></a>



<a href="#" id="searchBtn">

<img src="data/sc.png" alt="otsi" width="18" height="18">

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
    <a class="navbar-brand" href="index.php"><p class="display-6">Raivo Padu</p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Avaleht</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data/tooted.php">Tooted</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data/teenused.php">Teenused</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data/kontakt.php">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


        





        <div class="row">


        
        <div class="col">


          <img class="img-fluid" src="data/man.png" alt="pilt">


           </div>



            <div class="col">
                <h1 class="display-3">Tõestan, et oskan Bootstrappi</h1>
                <p class="lead">Tegelikult oskan täiega HTML, CSS ja Bootstrap APIt. Kahjuks olen liiga laisk!</p>

            </div>




        </div>


        <div class="row" style="margin-top:50px">

            <div class="col">

            <h1 class="display-3 text-center">Meie Teenused</h1>
            <p class="lead text-center">Otsingu luubil saan klikkida ja kuvatakse hüpikmenüüna otsingukast!</p>


            </div>



        </div>



        



<div class="col">
    <div class="row justify-content-center">



    <div class="card mx-auto" style="width: 18rem;">
  <img src="data/euro_red.png" alt="Card image cap" width="50" height="50" style="margin-top:15px;margin-left:15px; margin-bottom:15px">

  <div class="card-body">
    <p class="card-text">Lorem ipsum</p>
    <h5 class="card-title">Business</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, soluta incidunt fugit aperiam quod quisquam neque, vitae inventore, ad iure omnis accusantium et! Sapiente rerum culpa excepturi, consequatur ex itaque.</p>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
  <button class="btn btn-danger" type="button">Loe siit!</button>
</div>    

   
   
  </div>
</div>

<div class="card mx-auto text-white bg-secondary" style="width: 18rem;">

  <img src="data/suitcase.png" alt="Card image cap" width="50" height="50" style="margin-top:15px;margin-left:15px;margin-bottom:15px">

  <div class="card-body">
    <p class="card-text">Lorem ipsum</p>
    <h5 class="card-title">Business</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, soluta incidunt fugit aperiam quod quisquam neque, vitae inventore, ad iure omnis accusantium et! Sapiente rerum culpa excepturi, consequatur ex itaque.</p>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
  <button class="btn btn-primary" type="button">Loe siit!</button>
</div>    

   
   
  </div>
</div>


<div class="card mx-auto" style="width: 18rem;">
  <img src="data/car.png" alt="Card image cap" width="50" height="50" style="margin-top:15px;margin-left:15px; margin-bottom:15px">

  <div class="card-body">
    <p class="card-text">Lorem ipsum</p>
    <h5 class="card-title">Business</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, soluta incidunt fugit aperiam quod quisquam neque, vitae inventore, ad iure omnis accusantium et! Sapiente rerum culpa excepturi, consequatur ex itaque.</p>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
  <button class="btn btn-success" type="button">Loe siit!</button>
</div>    

   
   
  </div>
</div>






    </div>
       
</div>


<div class="row" style ="margin-top:50px">

            <div class="col">

            <h1 class="display-3 text-center">Meie Tehtud Tööd</h1>
            <p class="lead text-center">Seekord pääsesin selliselt</p>


            </div>



        </div>


  

        </div>









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



        <script>
  document.getElementById('searchBtn').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('searchModal'));
    myModal.show();
  });
</script>

        


    </body>
</html>
