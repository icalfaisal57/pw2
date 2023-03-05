<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
<form action="">
<fieldset>
    <legend>
        Belanja Online
    </legend>
            <form action="proses_tugas.php" method="GET">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Customer</label> 
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control" required="required">
            </div>
    </div>
  <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="form-check form-check-inline">
            <input name="produk" id="produk_0" type="radio" class="form-check-input" value="TV" required="required"> 
            <label for="produk_0" class="form-check-label">TV</label>
      </div>
      <div class="form-check form-check-inline">
            <input name="produk" id="produk_1" type="radio" class="form-check-input" value="Kulkas" required="required"> 
            <label for="produk_1" class="form-check-label">Kulkas</label>
      </div>
      <div class="form-check form-check-inline">
            <input name="produk" id="produk_2" type="radio" class="form-check-input" value="Mesin Cuci" required="required"> 
            <label for="produk_2" class="form-check-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah Yang Diinginkan" type="text" class="form-control" required="required" aria-describedby="jumlahHelpBlock"> 
      <span id="jumlahHelpBlock" class="form-text text-muted">Masukan Angka (1,2,3,..)</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <a href="tabelhasil.php"><button name="submit" type="submit" class="btn btn-primary">Submit</button></a>
    </div>
  </div>
</fieldset>
</form>
		</div>
		<div class="col-md-4">
			<table class="table table-sm table-bordered">
					<tr>
						<th class="bg-primary">
                        TV : Rp. 4.200.000
						</th>	
					</tr>
					<tr>
						<th>
                    Kulkas : Rp. 3.100.000
						</th>	
					</tr>
					<tr>
						<th>
                        Mesin Cuci : rp. 3.800.000
						</th>	
					</tr>
					<tr>
						<th class="bg-primary">
                        Harga Dapat Berubah Setiap Saat
						</th>	
					</tr>
			</table>
		</div>
	</div>
    <div class="row">
		<div class="col-md-12">
			<table class="table">
            <tr class="table-danger">
              <th >Nama Customer</th>
              <th>Produk Yang DiBeli</th>
              <th>Jumlah Barang</th>
              <th>Total Harga</th>
            </tr>
            
            
            <?php
                require_once "proses_tugas.php"
            ?>
                <tr class="table-primary">
                    <th><?= $nama ?></th>
                    <th><?= $produk ?></th>
                    <th><?= $jumlah ?></th>
                    <th><?= "Rp. $ket "?></th>
                </tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>