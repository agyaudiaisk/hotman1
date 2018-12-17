<section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Kekeringan</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listgunungmeletusbdpb') ?>">Gunung Meletus</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listbanjirbdpb')?>">Banjir</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listtanahlongsorbdpb')?>">Tanah Longsor</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listangintopanbdpb')?>">Angin topan</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listkebakaranbdpb')?>">Kebakaran</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listgempabumibdpb')?>">Gempa Bumi</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('BDPB/listtsunamibdpb')?>">Tsunami</a>
    </li>
    <li class="page-item active"><a class="page-link" href="<?php echo site_url('BDPB/listkekeringanbdpb')?>">Kekeringan</a>
    </li>

  </ul>
</nav>

           </center>
          </div>

        </div>
        <div class="row">
        <div class="col-sm-12">  
           <?php foreach ($bencanakekeringan->result() as $key) {?>
          <div class="list-group">
          

            <a href="<?php echo site_url('BDPB/rincianbdpb/'.$key->id_bencana)?>" class="list-group-item list-group-item-action">
              <?php echo $key->nama_bencana;?> </a>

             <!--  <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Ponorogo</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Minas</a> -->
              
              
              
          </div>
           <?php }?>
        </div>
        </div>

            
    </section>