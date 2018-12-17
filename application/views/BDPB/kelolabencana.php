<!doctype html>
<html lang="en">
 
  <body>
  <!-- nav -->
    <link   rel="stylesheet" href="<?php echo base_url();?>/assets/dataTables/datatables.css">
  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
    <div class="container">
      <div class="col-sm-12 card" style="width: 100%;">

      <div class="row">
      <div class="col-sm-12">
      <h2 class="text-center">Kelola Bencana</h2>
      <hr style="width: 100%" >
      </div></div>

      <!-- <div class="row">
        <div class="col-sm-12"> -->
            
        <table class="table table-striped" id="datatables">
            <thead>
            <tr >
              <th class="text-left " scope="col">Bencana</th>
              <th class="text-center " scope="col">Status</th>
              <th class="text-center " scope="col">Kelola</th>
              </tr>
            </thead>
  
  <tbody>


<?php foreach ($nama->result() as $key) { ?>
    <tr>
        <td>  <?php echo $key->nama_bencana;?></td>
        <td>
          <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0,5%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
              </div>
          </div>
        </td>

        <td class="text-center">
          <a href="<?php echo site_url('BDPB/editbencana/'.$key->id_bencana)?>" class="btn btn-success" style="width: 30%">Edit</a>
           <a href="<?php echo site_url('BDPB/hapus/'.$key->id_bencana)?>" class="btn btn-danger" style="width: 30%">Hapus</a></td>
        </td>
    </tr>
    <?php }?>

  
    
  </tbody>
</table>

            
    </section>
    <script src="<?php echo base_url();?>/assets/dataTables/datatables.js"> </script>
   
 

 