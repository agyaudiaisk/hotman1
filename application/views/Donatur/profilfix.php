<?php 
  $user = ($this->session->userdata('user'));
  $data_user = ($this->session->userdata('data_user'));
 ?>
  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
        
            
           <h2 class="text-center"><img src="<?php echo base_url();?>foto/<?php echo $data_user->foto ?>" class="rounded-circle" width="200px"></h2>
              
            </div>
          </div>
        </div>
        <form>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <p class="form-control" id="validationDefault01"  ><?php echo htmlentities($data_user->namalengkap, ENT_QUOTES,'UTF-8'); ?></p>
            </div>
          </div>

          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <p class="form-control" id="validationDefault01" ><?php echo htmlentities($data_user->nik, ENT_QUOTES,'UTF-8') ;?></p>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">No Telepon</label>
            <div class="col-sm-10">
              <p  class="form-control" id="validationDefault01" ><?php echo htmlentities($data_user->telepon, ENT_QUOTES, 'UTF-8');?></p>
            </div>
          </div>
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control" id="validationDefault01"><?php echo htmlentities($data_user->Email, ENT_QUOTES,'UTF-8'); ?></p>
            </div>
          </div>
          <!-- <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="validationDefault01" placeholder="<?php echo $data_user->alamat ?>" required>
            </div>
          </div> -->
          
          
          
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
 
   