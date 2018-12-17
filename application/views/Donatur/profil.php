<?php 
  $user = ($this->session->userdata('user'));
  $data_user = ($this->session->userdata('data_user'));
 ?>
  <!-- tutup jumbotron -->


  <html>
<head>
  <style type="text/css">
#kiri
{
width:30%;
height:400px;
background-color:#white;
float:left;
margin-left: 22%;
margin-top: 2%;
padding-top: 65px;
}
#kanan
{
width:30%;
height:400px;
background-color:#white;
float:right;
margin-right: 10%; 
margin-top: 9%;
}

#tengah
{
width:1%;
height:400px;
background-color:#white;
float:right;
margin-right: 5%;
margin-top: 3%; 
}
#button
{
width: 120px;
height:50px;
margin-top: 10%;
margin-left: 50%;

}

</style>
  <title></title>
</head>
<body style="padding-bottom: 20px">
<div id="kiri">
  <p> <img src="<?php echo base_url();?>foto/<?php echo $data_user->foto ?>" width="400px" height="400px"></p>
</div>

<div id="kanan">
  <p> <img src="<?php echo base_url();?>/assets/img/aa.png"> <?php echo $data_user->namalengkap ?> </p>
  <p> <img src="<?php echo base_url();?>/assets/img/email.png"> <?php echo $data_user->email ?></p>
  <p> <img src="<?php echo base_url();?>/assets/img/hp.png"> <?php echo $data_user->telepon ?></p>
  <p> <img src="<?php echo base_url();?>/assets/img/alamat.png"> <?php echo $data_user->alamat ?></p>  
</div>

<div id="tengah">
    <p> <img src="<?php echo base_url();?>/assets/img/line.png"></p> 
</div>

   <button class="btn btn-primary" id="button" style="margin-top:80px; background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; position: center ">Edit</button>

</body>



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
                      
                      <a href="<?php echo site_url('Donatur/profil') ?>" class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>   
         
            </div>
          </div>
        </form>
        </div>

            
    </section>

   </html>