<!DOCTYPE html><html class="menu">
<html>

<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Transaksi</title>
<link rel='shorcut icon' href=<?php echo base_url('asset/gambar/logo3-ico.png');?>>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/navbar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/sidebar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/transaksi.css');?>">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="area">
    </div>
    <nav class="navMenu">
      <a href="<?php echo base_url('index.php/C_beranda/beranda');?>"> Beranda </a>
      <a href="<?php echo base_url('index.php/C_transaksi/transaksi');?>"> Transaksi </a>
      <a href="<?php echo base_url('index.php/C_laporan/laporan');?>">Laporan</a>
      <a href="<?php echo base_url('index.php/C_master_data/data_master');?>">Data Master</a>
      <div class="dot"></div>
    </nav>
    <nav class="main-menu">
      <a class ="alogo" href="#"> <img class= "logo" src="<?php echo base_url('asset/gambar/logo3.png');?>"> </a>
      <br><br>
      <ul>
        <!-- Menu Dashboard -->
        <li>
          <a href="<?php echo base_url('index.php/C_beranda/beranda');?>">
            <i class="fa fa-home fa-2x"></i>
            <span class="nav-text">
              Dashboard
            </span>
          </a>
        </li>
        <!-- Menu Transaksi -->
        <li class="has-subnav">
          <a href="<?php echo base_url('index.php/C_transaksi/transaksi');?>">
            <i class="fa fa-laptop fa-2x"></i>
            <span class="nav-text">
              Transaksi
            </span>
          </a>
        </li>
        <!-- Menu Laporan -->
        <li class="has-subnav">
          <a href="<?php echo base_url('index.php/C_laporan/laporan');?>">
            <i class="fa fa-book fa-2x" aria-hidden="true"></i>
            <span class="nav-text">
              Laporan
            </span>
          </a>
        </li>
        <!-- Menu Data Master -->
        <li class="has-subnav">
          <a href="<?php echo base_url('index.php/C_master_data/data_master');?>">
            <i class="fa fa-folder fa-2x" aria-hidden="true"></i>
            <span class="nav-text">
                Data Master
            </span>
          </a>
        </li>
      </ul>
  
      <ul class="logout">
          <li>
             <a href="<?php echo base_url('index.php/C_login/logout'); ?>">
                   <i class="fa fa-power-off fa-2x"></i>
                  <span class="nav-text">
                      Logout
                  </span>
              </a>
          </li>  
      </ul>
      </nav>
  </header>

  <div class="jumbotron">
    

  <h2>Tambah Transaksi Baru</h2>
  <hr>
  <form method="post" action="simpan_transaksi" class="form-horizontal" role="form">
    <table class="table_main">
      <tr>
        <td> 
          <div class="form-group">
            <label for="no_nota" class="col-sm-3 control-label">No. Nota</label>
            <div id="hasil-output"></div>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="no_nota" value="<?= $tanggal;?>" require readonly >
          </div>
        </div>
        </td>
      </tr>
      
      <tr>
        <td>
          <div class="form-group">
            <label for="nama_pelanggan" class="col-sm-3 control-label">Nama Pelanggan</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan" required>
            </div>
          </div>
        </td>
      </tr>
      
      <tr>
        <td>
          <div class="form-group">
            <label for="no_pol" class="col-sm-3 control-label">Nomer Polisi</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="no_pol" name="no_pol" placeholder="Plat Nomor Kendaraan" required>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="form-group">
            <label for="jenis" class="col-sm-3 control-label">Kendaraan</label>
            <div class="col-sm-5">
              <select name="jenis" class="form-control" id="jenis" required>
                <option value="" disable>--- Pilih Jenis Kendaraan ---</option>
                  <?php foreach ($kendaraan as $user) { 
                    echo "<option value=$user->nama_kendaraan> $user->nama_kendaraan - $user->harga</option>";
                  }?>
              </select>
            </div>
          </div>
        </td>
      </tr>
      
      <tr>
        <td>
          <div class="form-group">
            <label for="harga" class="col-sm-3 control-label">Harga</label>
            <div class="col-sm-5">
            <select name="harga" class="form-control" id="harga" onchange="total()" required>
                <option value="" disable>--- Harga ---</option>
                  <?php foreach ($kendaraan as $user) { 
                    echo "<option value=$user->harga>$user->harga</option>";
                  }?>
              </select>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="form-group">
            <label for="bayar" class="col-sm-3 control-label">Bayar</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="bayar" name="bayar" placeholder="Bayar" onchange="total()" required>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="form-group">
            <label for="kembali" class="col-sm-3 control-label">Kembalian</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="kembali" name="kembali" placeholder="kembalian"  required readonly>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <br>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url('index.php/C_cuci/transaksi');?>" class="btn btn-danger">Batal</a>
            </div>
          </div>
        </td>
      </tr>

  </table>
  </form>
  
  <script type="text/javascript">
        function total() {
          var kembalian =
          document.getElementById("bayar").value -
          document.getElementById("harga").value;
          document.getElementById("kembali").value = kembalian;
        }
	</script>
    <!-- Penutup DIV Card -->
  </div>

  <footer>
    <h6>©CopyRight Cucian Kendaraan</h6>
  </footer>
  </body>
</html>