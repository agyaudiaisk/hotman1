<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">
    <style type="text/css">
      body {
        margin-top: 80px;
      }
      .profil hr {
         width: 150px;
         border-top: 2px solid #666;
      }
    
    </style>

    <title>iJasa</title>
  </head>
  
  <body>
  <!-- nav -->
    
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #0000009c;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
  <form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Cari bencana atau lokasi" aria-label="Search" style="border-color: white">
      <button class="btn btn-outline-light my-2 my-sm-0" style="color: white; border-color: white;" type="submit">Cari</button>
    </form>
      </li>
      <li class="nav-item ">
        <a class="nav-link" style="color: white; padding-left:500px; font-family: roboto; font-size: 18px;
         " href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;  padding-left:20px; font-family: roboto; font-size: 18px;" href="<?php echo base_url();?>index.php/semuabencana">Bencana</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;padding-left:20px;font-family: roboto; font-size: 18px;" href="<?php echo base_url();?>index.php/semuabencana">About</a>
      </li>
      
    </ul>
 <div style="padding-right:  50px;color: white; "><h5 class="display-5">Hai, Donatur !</h5></div>
    <div class="dropdown show">
  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="<?php echo base_url();?>/assets/img/lol.png" class="rounded-circle" width="60px">
    
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/profil">Profil</a>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/semuabencana">Donasi</a>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/riwayat">Riwayat</a>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/login">Sign out</a>
  </div>
</div>
    
    
  </div>
</nav>

<?php echo $contents; ?>


  <!-- tutup jumbotron -->
   <footer style="background-color:#e8e8e8" >
      <center>
      <div class="container" >
      <div class="row">
        <div class="col-sm-5 offset-sm-1" >
          <strong><u><h4 style="color: #ff3b3f">iJasa</h4></u></strong>
          <p style="color: #666666">Merupakan aplikasi resmi yang bekerja sama dengan BDPB untuk pendistribusian bantuan logistik</p>
        </div>      
       
        <div class="col-sm-5" >
          <h6 style="color: #ff3b3f">Contact us:</h6>
          <div>
          <p class="fa fa-map-marker"><span>    Universitas Islam</span> Indonesia</p>
        </div>

        <div>
          <p class="fa fa-phone">    082137563179</p>
        </div>

        <div>
        
          <p> <i class="fa fa-envelope"></i> <a href="mailto:support@company.com">    hotman@students.uii.ac.id</a></p>
        </div>
        </div>
      </div>
    </div>
      

      <div class="container"><hr>
        <div class="row text-center">
          <div class="col-sm-12">
          
            <p>
              &copy; copyright 2018 | Built by Hotman
            </p>
          </div>

        </div>

      </div>

      </div>

      </center>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
      });
      $('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something…
});
      (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
    </script>
  </body>
</html>
<!--  -->