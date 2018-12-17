<section class="profil " id="profil">
    <div class="container">
      <div class="col-sm-12 card" style="width: 100%;">

      <div class="row">
      <div class="col-sm-12">
      <h2 class="text-center">Daftar Donatur</h2>
      <hr style="width: 100%" >
      </div></div>




         <table class="table table-striped" id="datatables">
            <thead>
            <tr >
              <th class="text-left " scope="col">Nama</th>
              <th class="text-left " scope="col">Email</th>
              <th class="text-left " scope="col">Alamat</th>
              <th class="text-left " scope="col">Bencana</th>

              </tr>
            </thead>
  
  <tbody>


<?php foreach ($donasi->result() as $key) { ?>
  <div>
    <tr>
        <td>  <!-- <?php echo $key->nama_bencana;?> -->
             <a   style="border: 0px"> <?php echo $key->nama_donatur;?></a>
        </td>
        <td>  <!-- <?php echo $key->nama_bencana;?> -->
             <a  style="border: 0px"> <?php echo $key->email_donatur;?></a>
        </td>
        <td>  <!-- <?php echo $key->nama_bencana;?> -->
             <a    style="border: 0px"> <?php echo $key->alamat_donatur;?></a>
        </td>
        <td>  <!-- <?php echo $key->nama_bencana;?> -->
             <a    style="border: 0px"> <?php echo $key->nama_bencana2;?></a>
        </td>
    <!--     class="list-group-item list-group-item-action" -->

      
    </tr>
  </div>
    <?php }?>

  
    
  </tbody>
</table>





 

            
    </section>