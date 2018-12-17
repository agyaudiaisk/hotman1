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
  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
        
            
           <h2 class="text-center"><img src="<?php echo base_url();?>/assets/img/profil.png" class="rounded-circle" width="200px"></h2>
              
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
                      
                      <a href="<?php echo base_url();?>index.php/profil" class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>   
         
            </div>
          </div>
        </form>
        </div>

            
    </section>
 
   