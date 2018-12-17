<?php 
  $user = ($this->session->userdata('user'));
  $data_user = ($this->session->userdata('data_user'));
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">
    <style type="text/css">
      body {
        margin-top: 0px;
      }
      .profil hr {
         width: 150px;
         border-top: 2px solid #666;
      }
      section {
  min-height: 600px;
}
      
    </style>

</head>
  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
    <div class="container">
      <div class="col-sm-12 card" style="width: 100%;">

      <div class="row">
      <div class="col-sm-12">
      <h2 class="text-center">Donasi untuk kejadian bencana</h2>
      <hr style="width: 100%" >
      </div></div>

      <div class="row">
        <div class="col-sm-12">
            <form action="<?php echo base_url();?>tambahdonasi.php" method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Bencana</label>
            <div class="col-sm-10">
              <div class="input-group ">
                <input type="text"class="form-control" aria-label="With textarea" required id="nama_bencana2" name="nama_bencana2" value="<?php echo $data_bencana->nama_bencana?>"   required="TRUE"></input>
            </div>
            </div>
          </div>


           <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="nama_donatur" name="nama_donatur" value="<?php echo $data_user->namalengkap ?>"   required="TRUE"></input>
            </div>
          </div>
          </div>

          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="email_donatur" name="email_donatur" value="<?php echo $data_user->email ?>" style="display: none;" ></input>
            </div>
          </div>
          </div>

          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="alamat_donatur" name="alamat_donatur" value=<?php echo $data_user->alamat ?>" style="display: none;"></input>
            </div>
          </div>
          </div>

           <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="id_bencana2" name="id_bencana2" value="<?php echo $data_bencana->id_bencana ?>"  style="display: none;" required="TRUE"></input>
            </div>
          </div>
          </div>


         

          <div class="form-group row">
          <div class="col-sm-12">
          <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tambah Kebutuhan Logistik
        </button>
      </h5>
    </div>

    <div class="form-group row">
    <div class="col-sm-12 ">
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
<div class="form-group row">
          <div class="input-group col-sm-4">
          <div class="input-group-prepend">
         <!--   <div class="input-group-text">

              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (Kg)" id="beras" name="beras">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Beras</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (Kardus)" id="mie_instan" name="mie_instan">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Mie Instan</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
              
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (Kardus)" id="air_minum" name="air_minum">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Air Minum</span>
          </div>
        </div>

      </div>
      <div class="form-group row">
          <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">

              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (Kardus)" id="susu" name="susu">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Susu</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (buah)" id="obat" name="obat">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Obat</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
              
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (buah)" id="selimut" name="selimut">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Selimut</span>
          </div>
        </div>







      </div>


       <div class="form-group row">
          <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">

              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (buah)" id="kasur_karpet" name="kasur_karpet">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Karpet</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (paket)" id="peralatan_mandi" name="peralatan_mandi">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Alat Mandi</span>
          </div>
        </div>

        <div class="input-group col-sm-4">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
              
            </div> -->
          </div>
          <input  class="form-control"  placeholder ="Banyaknya (buah)" id="pakaian" name="pakaian">
          <div class="input-group-append">
            <span class="input-group-text " style="width: 100px">Pakaian</span>
          </div>
        </div>



        



      </div>
      
    </div>
    </div>


    </div>

  </div>
  </div>
  </div>
  </div>

          <div class="form-group row">
            <div class="col-sm-12 text-right">
            <button class="text-right" style="padding-top: 20px" data-toggle="modal" data-target="#exampleModalCenter">Donasi Sekarang</button>
       
               <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Bencana berhasil disimpan !</h5>
                      <button type="button" href="" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-footer  " >
                      
                      <a  class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>
         <!-- href="<?php echo site_url('Donatur/berhasil')?> " -->
            </div>
          </div>
        </form>

            
    </section>
   
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>
<!--  -->