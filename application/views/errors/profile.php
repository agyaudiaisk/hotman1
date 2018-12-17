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
      }
    </style>

    <title>iJasa</title>
  </head>
  
  <body>
  <!-- nav -->
    
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #104C49;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/semuabencana">Bencana</a>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari bencana atau lokasi" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
    </form>
      </li>
    </ul>
    <div class="dropdown show">
  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="<?php echo base_url();?>/assets/img/profil.png" class="rounded-circle" width="60px">
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profil.html">Profil</a>
    <a class="dropdown-item" href="semuabencana.html">Donasi</a>
    <a class="dropdown-item" href="riwayat.html">Riwayat</a>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/login.html">Sign out</a>
  </div>
</div>
    
    
  </div>
</nav>
  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Profil</h2>
            <hr>
           <h2 class="text-center"><img src="<?php echo base_url();?>/assets/img/profil.png" class="rounded-circle" width="200px"></h2>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Ganti Foto Profil</label>
                </div>
            </div>
          </div>
        </div>
        <form>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="validationDefault01" placeholder="Nama" value="Pevita Pearce" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="validationDefault01" placeholder="NIK" value="3523587542" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">No Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="validationDefault01" placeholder="No Telepon" value="085655656855" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="Email" class="form-control" id="validationDefault01" placeholder="Email" value="Pevita.pearce@gmail.com" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="validationDefault01" placeholder="Alamat" value="Warujayeng Tanjunganom Nganjuk" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" value="adzkaganz" required>
            </div>
          </div>
          
          
          <div class="form-group row">
            <div class="col-sm-12 text-right">
              <!-- Button trigger modal -->
              

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Simpan
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Data berhasil disimpan !</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-footer  " >
                      
                      <a href="profil.html" class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>   
         
            </div>
          </div>
        </form>
        </div>

            
    </section>
 
    <footer>
      <div class="container">
      <div class="row" >
        <div class="col-sm-5 offset-sm-1">
          <strong><u><h4>iJasa</h4></u></strong>
          <p>Merupakan aplikasi resmi yang bekerja sama dengan BDPB untuk pendistribusian bantuan logistik</p>
        </div>      
        <div class="col-sm-5">
          <h4>Temukan kami di :</h4>
          <a href=""><img src="<?php echo base_url();?>/assets/img/fb.png" class="rounded-circle" width="30px"></a>    
          <a href=""><img src="<?php echo base_url();?>/assets/img/ig.png" class="rounded-circle" width="35px"></a>
          <a href=""><img src="<?php echo base_url();?>/assets/img/tw.png" class="rounded-circle" width="32px"></a>
        </div>
      </div>
      
        <div class="row text-center">
          <div class="col-sm-12">
          <hr>
            <p>
              &copy; copyright 2017 | Built by IndiCorp
            </p>
          </div>
        </div>
      </div>
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