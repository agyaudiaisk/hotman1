

  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  
   <li class="page-item active"><a class="page-link" href="<?php echo site_url('Donatur/listgunungmeletusdonatur') ?>">Gunung Meletus</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listbanjirdonatur')?>">Banjir</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listtanahlongsordonatur')?>">Tanah Longsor</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listangintopandonatur')?>">Angin topan</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listkebakarandonatur')?>">Kebakaran</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listgempabumidonatur')?>">Gempa Bumi</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listtsunamidonatur')?>">Tsunami</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Donatur/listkekeringandonatur')?>">Kekeringan</a>
    </li>


  </ul>
</nav>

           </center>
          </div>

        </div>
       
        <div class="row">
        <div class="col-sm-12"> 

         <?php foreach ($bencanagunung->result() as $key) { ?>

          <div class="list-group">
            <a href="<?php echo site_url('Donatur/rinciandonatur/'.$key->id_bencana)?>" class="list-group-item list-group-item-action"> <?php echo $key->nama_bencana;?></a>

            <!-- <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action"> </a>
            <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Agung</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Gunung Bromo</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Kelud</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Kerinci</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Krakatau</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Mugajah</a>
             
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Gunung Semeru</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Sinabung</a>
             -->
              
          </div>
          
          <?php }?>
        </div>
        </div>
      </div>
    </section>
