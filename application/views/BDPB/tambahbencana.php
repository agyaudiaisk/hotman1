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
        margin-top: 80px;
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
      <h2 class="text-center">Tambah kejadian bencana</h2>
      <hr style="width: 100%" >
      </div></div>

      <div class="row">
        <div class="col-sm-12">
            <form action="<?php echo base_url();?>tambahbencana.php" method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Jenis Bencana</label>
            <div class="col-sm-10">
              <div class="input-group ">
              <select class="custom-select" id="inputGroupSelect02" type="required"
              id="jenis" name="jenis" required="TRUE">
                <option selected>Pilih</option>
                <option value="1">Gunung Meletus</option>
                <option value="2">Banjir</option>
                <option value="3">Badai Angin</option>
                <option value="4">Tsunami</option>
                <option value="5">Kebakaran</option>
                <option value="6">Kekeringan</option>
                <option value="7">Gempa Bumi</option>
                <option value="8">Tanah Longsor</option>
              </select>
            </div>
            </div>
          </div>

           <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="nama_bencana" name="nama_bencana" required="TRUE"></input>
            </div>
          </div>
          </div>

            <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Nama penerima</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="nama_penerima" name="nama_penerima" required="TRUE"></input>
            </div>
          </div>
          </div>

            <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Alamat penerima</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="alamat_penerima" name="alamat_penerima" required="TRUE"></input>
            </div>
          </div>
          </div>

            <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Telepon penerima</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="text"class="form-control" aria-label="With textarea" required id="telepon_penerima" name="telepon_penerima" required="TRUE"></input>
            </div>
          </div>
          </div>


          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <textarea class="form-control" aria-label="With textarea" placeholder="Masukkan deskripsi kejadian bencana" required id="deskripsi_bencana" name="deskripsi_bencana" required="TRUE" ></textarea>
            </div>
          </div>
          </div>

            <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file" id="foto" name="foto" required="TRUE" ></input>
            </div>
          </div>
          </div>

          <div class="form-group row">
            <label for="validationDefault01" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <fieldset >
            <div class="form-group">
            <input type="text"  class="form-control" id="lokasi_bencana" name="lokasi_bencana" class="form-control" placeholder="Masukkan alamat dengan lengkap" required>
            <a href="https://www.google.co.id/maps"><img src="<?php echo base_url();?>/assets/img/map2.png" style="width: 100%"></a>
          </div>
          </fieldset>
          </div></div>

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
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Simpan
              </button> 
               <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Bencana berhasil disimpan !</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-footer  " >
                      
                      <a href="semuabencanapet.html" class="btn btn-primary">Oke</a>
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
        </form>

            
    </section>
   
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
      });
      $('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something…
});
    </script>
  </body>
</html>
<!--  -->