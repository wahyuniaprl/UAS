<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/styles.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
</head>
<?php
include "connection.php";
include "header.php";
?>
<div class="container">
<h1>Pesanan Makanan</h1>
<form action="submit.php" method="post">
<input type="hidden" name="No" value="<?php echo " $row[No]" ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input name="NO" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Restoran</label>
    <input name="jenis_restoran" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Makanan</label>
    <select name="makanan" class="form-control" id="exampleFormControlSelect1">
    <?php
        $Jns_mkn = [
          'Paket Nasi Tempe Orek, Kentang Balado, Oseng - Oseng, Tongkol'
          ,
  ];
        foreach ($Jns_mkn as $value) {
            echo "<option value=$value>$value</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Handphone</label>
    <input name="no_handphone" type="text" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kemampuan</label>
    <input name="skills" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kemampuan">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>