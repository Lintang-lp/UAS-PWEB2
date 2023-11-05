<!DOCTYPE html><html class="menu">
<html>

<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Data Master</title>
<link rel='shorcut icon' href=<?php echo base_url('asset/gambar/logo3-ico.png');?>>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/navbar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/sidebar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/data_master.css');?>">
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
    

  <h2>Data Master Biaya</h2>
  <hr>
  <table class="table1">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('index.php/C_master_data/input_master');?>">
          <button type="submit" name="submit" class="btn btn-success">Tambah Data Master</button>
        </a>
      </div>
    </div>
  <thead>
    <tr>
      <th>NO</th>
      <th>jenis Kendaraan</th>
      <th>Biaya</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    foreach ($master as $user) { $no++
    ?>
    <tr>
      <td align="center">   <?= $no;                             ?></td>
      <td align="left">     <?= $user->nama_kendaraan;           ?></td>
      <td align="right">Rp. <?= number_format($user->harga);     ?></td>
      <td align="center">   <?php echo '<a class="action" href="'.base_url().'index.php/C_master_data/delete_master/'.
                             $user->id_harga.'"onclick="return confirm (\'Anda Yakin Menghapus '.
                             $user->nama_kendaraan.'?\')">Delete</a>'  ?></td>
    </tr>
    <?php
    }?>
  </tbody>
</table>

    <!-- Penutup DIV Card -->
  </div>

  <footer>
    <h6>©CopyRight Cucian Kendaraan</h6>
  </footer>
  </body>
</html>