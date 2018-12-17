  <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Semua Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listgunungmeletuspetugas') ?>">Gunung Meletus</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listbanjirpetugas')?>">Banjir</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listtanahlongsorpetugas')?>">Tanah Longsor</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listangintopanpetugas')?>">Angin topan</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listkebakaranpetugas')?>">Kebakaran</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listgempabumipetugas')?>">Gempa Bumi</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listtsunamipetugas')?>">Tsunami</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('Petugas/listkekeringanpetugas')?>">Kekeringan</a></li>
  </ul>
</nav>

           </center>
          </div>

        </div>




         <table class="table table-striped" id="datatables">
            <thead>
            <tr >
              <th class="text-left " scope="col">Bencana</th>
              </tr>
            </thead>
  
  <tbody>


<?php foreach ($nama->result() as $key) { ?>
    <tr>
        <td>  <!-- <?php echo $key->nama_bencana;?> -->
             <a href="<?php echo site_url('Petugas/rincianpetugas/'.$key->id_bencana)?>" class=" list-group-item list-group-item-action"  style="border: 0px"> <?php echo $key->nama_bencana;?></a>
        </td>
    <!--     class="list-group-item list-group-item-action" -->

      
    </tr>
    <?php }?>

  
    
  </tbody>
</table>
        <!-- <div class="row">
        <div class="col-sm-12"> 

     
         
         <?php foreach ($nama->result() as $key) { ?>
        
         
          <div class="list-group">
              <a href="<?php echo site_url('Umum/rincian/'.$key->id_bencana)?>" class="list-group-item list-group-item-action"> <?php echo $key->nama_bencana;?></a>
             <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tsunami Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin topan jepara</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Tanah longsor Malang</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kebakaran Kilang Minyak Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kekeringan Boyolali</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tanah Longsor Karanganyar</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Kebakaran Kilang Minyak Balikpapan</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gempa Bumi Sumenep</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin Topan Tuban</a> 
              
          </div>

        <?php }?>



      

        </div>
        </div> -->

            
    </section>
