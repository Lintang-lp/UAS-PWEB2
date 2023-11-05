<!DOCTYPE html><html class="menu">
<html>

<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Beranda</title>
<link rel='shorcut icon' href=<?php echo base_url('asset/gambar/logo3-ico.png');?>>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/navbar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/sidebar.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/beranda.css');?>">
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
    <h1 class="display-4">Hello, Admin!</h1>
    <p class="lead">Welcome to Aplikasi LIN WASH</p>
    <!-- Div Card -->
    <div class="container mt-5 mb-3">
      <div class="row">
        <!-- Card Transaksi -->
        <div class="col-md-4">
          <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                          <div class="icon"> 
                            <i class="fa fa-pencil-square-o fa-2x"></i> 
                          </div>
                          <div class="ms-2 c-details">
                              <h2 class="mb-0">Transaksi</h2>
                          </div>
                      </div>
                      <div class="badge"> <span>orang</span> </div>
                    </div>
                  <div class="mt-5">
                      <h3 class="heading"><?php echo $total_transaksi; ?></h3>
                  </div>
              </div>
            </div>
            <!-- Card Income -->
            <div class="col-md-4">
              <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                    <div class="icon"> 
                      <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
                    </div>
                          <div class="ms-2 c-details">
                              <h2 class="mb-0">Income</h2>
                          </div>
                      </div>
                      <div class="badge"> <span>Money</span> </div>
                  </div>
                  <div class="mt-5">
                      <h3 class="heading">RP <?php echo number_format($total_income); ?></h3>
                  </div>
              </div>
          </div>
          <!-- Card Admin -->
          <div class="col-md-4">
              <div class="card p-3 mb-2">
                  <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                          <div class="icon"> 
                            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                          </div>
                          <div class="ms-2 c-details">
                              <h2 class="mb-0">Admin</h2>
                          </div>
                      </div>
                      <div class="badge"> <span>orang</span> </div>
                  </div>
                  <div class="mt-5">
                      <h3 class="heading"><?php echo $this->session->userdata("nama"); ?></h3>
                  </div>
              </div>
          </div>
          <!-- Penutup Admin -->
        </div>
    </div>
    <!-- Penutup DIV Card -->
  </div>

  <footer>
    <h6>©CopyRight Cucian Kendaraan</h6>
  </footer>
  </body>
</html>