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
      .jumbotron {
          position: relative;
          
          color:#fff;
          width: 100%;
          height: 100%;
          background-size: cover;
          overflow: hidden;
          min-height: 400px;
      }

        #box1{
        margin-bottom:15px;
        padding-top:11%;
        padding-left:44%;
      }

      body {
        background-image: url(<?php echo base_url();?>/assets/img/loginfix.png);
      }
    </style>

    <title>iJasa</title>
  </head>
  
  <body>
  <div id="box1" class="row"   >
  
<div class="offset-sm-5 ">
        <div class="card" style="width: 18rem; ">
  <div class="card-body">
    <?php echo form_open('Login/ceklogin') ?>
    <div class="text-center" style="padding-bottom: 10px ;">
      <img src="<?php echo base_url();?>/assets/img/user.png">
    </div>
    <h1 style="text-align: center;">iJasa</h1>

  <div class="form-group">
    
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username">
  </div>

  <div class="form-group">
    
    <input type="password" name="pass"class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
  </div>
  

  
  <div class="text-right">

<input type="submit" class="btn btn-primary" style="background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; position: center " name="login" value="LOGIN">

 <? php echo form_close(); ?>


<a href="<?php echo site_url('Login/daftar') ?>" class="btn btn-primary" style="background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; position: center " > DAFTAR</a>
 
  </div>


</div>
</div>
</div>

</div>
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
    </script>

  </body>
</html>
<!--  -->