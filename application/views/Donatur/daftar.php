<!doctype html>
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Daftar untuk berdonasi</title>
  </head>
  
  <body style="padding-top: 50px">
  	<div class="container">
	  	<div class="row">
			<div class="col-md-6">
			<form action="<?php echo base_url();?>daftardonatur.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label >Nama Lengkap</label>
			    <input type="text" class="form-control" id="namalengkap" name="namalengkap" required="TRUE">
			  </div>

			  <div class="form-group">
			    <label >Email</label>
			    <input type="text" class="form-control" id="email" name="email" required="TRUE">
			  </div>

			  <div class="form-group">
			    <label >Telepon</label>
			    <input type="numeric" class="form-control" id="telepon" name="telepon" required="TRUE">
			  </div>

			   <div class="form-group">
			    <label >Photo Profile</label>
			     <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file" id="foto" name="foto" required="TRUE">
			  </div>


			   <div class="form-group">
			    <label >Alamat</label>
			   <textarea class="form-control" id="alamat" rows="8" name="alamat" required="TRUE"></textarea>
			  </div>
			</div>

			<div class="col-md-6">
				
				<div class="form-group">
			    	<label >Username</label>
			    	<input type="text" class="form-control" id="username" name="username" required="TRUE">
			  	</div>

			  	<div class="form-group">
			    	<label >Password</label>
			    	<input type="password" class="form-control" id="password" name="password" required="TRUE">
			  	</div>

			  	<div class="form-group">
			    	<label >NIK</label>
			    	<input type="numeric" class="form-control" id="nik" name="nik" required="TRUE">
			  	</div>

			  	<div class="form-group">
			    	<input type="text" class="form-control" id="level" name="level" value="donatur" readonly="TRUE" style="display: none;"> 
			  	</div>
			  	
			  	<button type="submit" " class="btn btn-primary"   data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; position: center ">Daftar Sekarang </button> 
               <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Sudah terdaftar silakan login !</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-footer  " >
                      
                      <a href="" class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>	
			  </div>

			</form>  
			</div>
	  	</div>
  	</div>

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