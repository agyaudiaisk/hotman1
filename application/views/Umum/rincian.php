<section class="profil " id="profil">
    <div class="container">
      <div class="col-sm-12 card" style="width: 100%;">

      <div class="row">
      <div class="col-sm-12">
      <h2 class="text-center"><?php echo $data_bencana->jenis?></h2>
      <hr style="width: 100%" >
      </div></div>

      <div class="row">
        <div class="col-sm-5">
            <img class="card-img-top" style="width: 100%"  src="<?php echo base_url();?>fotobencana/<?php echo $data_bencana->foto?>" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>
        <div class="col-sm-5">
            <div >
              <div class="card-body">
             <h5 class="card-title"><?php echo $data_bencana->nama_bencana?></h5>
            <p class="card-text"><?php echo $data_bencana->deskripsi_bencana?></p>
            
              </div>
            </div>
        </div>
      </div>
       <div class="row">
          <div class="col-sm-12">
            <form>
            <fieldset disabled>
            <div class="form-group">
            <h5 class="card-title">Lokasi</h5>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Mount Merapi, Dusun 2, Suroteleng, Boyolali Regency, Central Java">
            <a href="https://www.google.co.id/maps/place/Mount+Merapi/@-7.5407173,110.4369693,15z/data=!3m1!4b1!4m5!3m4!1s0x2e7a641ec0ff2fa5:0xe92612624cad8800!8m2!3d-7.5407175!4d110.4457241"><img src="<?php echo base_url();?>/assets/img/map.jpg" style="width: 100%"></a>
          </div>
          </fieldset>
          </form>
          </div>
      </div>
      
      <div class="row">
          
            <div class="col-sm-12">
                 <h5 class="card-title">Kebutuhan Logistik </h5>
               
               <p class="card-text"> Beras </p>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow=" <?php echo $data_donasi->beras?>" aria-valuemin="0" aria-valuemax="100">  <?php echo $data_donasi->beras?>/ <?php echo $data_bencana->beras?> 
                        Kg</div>
                  </div>

               <p class="card-text"> Mie Instan</p>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow=" <?php echo $data_donasi->mie_instan?>" aria-valuemin="0" aria-valuemax="100"> <?php echo $data_donasi->mie_instan?>/<?php echo $data_bencana->mie_instan?>
                        Kardus</div>
                  </div>
          <p class="card-text"> Air minum</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->air_minum?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->air_minum?>/<?php echo $data_bencana->air_minum?>  Kardus</div>
          </div>
          <p class="card-text"> Susu</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->susu?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->susu?>/<?php echo $data_bencana->susu?>  Kardus</div>
          </div>
          <p class="card-text"> Obat</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->obat ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->obat?>/<?php echo $data_bencana->obat?>  Paket</div>
          </div>
          <p class="card-text"> Pakaian</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->pakaian?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->pakaian?>/<?php echo $data_bencana->pakaian?>  Stel</div>
          </div>
          <p class="card-text"> Kasur/Karpet</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->kasur_karpet?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->kasur_karpet?>/<?php echo $data_bencana->kasur_karpet?>  Buah</div>
          </div>
          <p class="card-text"> Selimut</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->selimut?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->selimut?>/<?php echo $data_bencana->selimut?>  Buah</div>
          </div>
          <p class="card-text"> Peralatan mandi</p>
             <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="<?php echo $data_donasi->peralatan_mandi?>" aria-valuemin="0" aria-valuemax="100"><?php echo $data_donasi->peralatan_mandi?>/<?php echo $data_bencana->peralatan_mandi?>  Paket</div><div> </div>
          </div>





          <div ><p class="text-right" style="padding-top: 20px"><a href="<?php echo site_url('Donatur/donasi/'. $data_bencana->id_bencana) ?>" class="btn btn-success">Donasi</a></p></div>
          
          </div>
      </div>
      
      </div>
           
          </div>
        
            
    </section>