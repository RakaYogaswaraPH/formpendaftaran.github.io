<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">

    <title>Login Form</title>
  </head>
  <body>
    
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-7">Form Pendaftaran Mahasiswa</h1>
    <p class="lead">Silahkan isi form login dibawah ini.</p>
  </div>
</div>

<div class="container">
<form method="post" action="" name="form_login">
  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama_lengkap">
  </div>

  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input id="datepicker" name="tanggal_lahir" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
  </div>

  <div class="form-group">
      <label for="domisili">Domisili</label>
      <select id="inputState" class="form-control" name="domisili">
        <option selected>Kabupaten Bandung</option>
        <option>Kabupaten Bandung Barat</option>
        <option>Kota Cimahi</option>
      </select>
    </div>

  <label for="jurusan">Pilih Jurusan</label>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="jurusan">Jurusan</label>
  </div>
  <select class="custom-select" id="jurusan" name="jurusan">
  <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
  </select>
  </div>

  <div class="form-group">
    <label for="alasan">Alasan Memilih Universitas Ini</label>
    <textarea class="form-control" name="alasan" rows="3"></textarea>
  </div>
  
  <div class="form-group">
  <label for="gender">Pilih Gender</label>
  <input type="radio" name="gender" value="Laki-Laki"> Laki - Laki
      <input type="radio" name="gender" value="Perempuan"> Perempuan
  </div>      
  
<button type="submit" class="btn btn-primary" name="Submit">Submit</button>
 
</div>
</form>
</div>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<br>
<br>
<?php
    if(isset($_POST['Submit'])) { 
      echo "Nama = ".$_POST ['nama_lengkap']."<br/>";
      echo "Tanggal Lahir = ".$_POST ['tanggal_lahir']."<br/>";
      echo "Domisili = ".$_POST ['domisili']."<br/>";
      echo "Jurusan = ".$_POST ['jurusan']."<br/>";
      echo "Alasan = ".$_POST ['alasan']."<br/>";
      echo "Gender = ".$_POST ['gender']."<br/>";
    }
?>
