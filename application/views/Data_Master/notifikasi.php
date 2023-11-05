<html>
<head> 
  <title> Transaksi Berhasil </title>
  <style>
    .n{
      font-size: 30px;
      font-family: "Andale Mono", "Monotype.com", monospace;
      text-align: center;
      width: 450px;
      margin: 20px 0 40px 438px;
      border-radius: 4px;
      padding: 10px 10px 10px 10px;
      background: #FFCAC8;
    }
    .tabel_aksi{
      font-family: "Andale Mono", "Monotype.com", monospace;
      font-size: 20px;
      margin-top: 30px;
      margin-left: 5%;
    }
    a {
      background-color: #212121;
      color: #999;
      padding: 7px 10px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }
    a:hover {
      background-color: #434242;
    }
    .table1 {
	    width: 500px;
    	margin: 0px 0 0 420px;
    	font-family: sans-serif;
    	color: #232323;
    	border-collapse: collapse;
    }
    .table1 tr{
    	border: 1px solid #999;
    	padding: 8px 20px;
    }
    .table1 tr > td {
    	border: 1px solid #999;
    	padding: 8px 20px;
    }
    .table1 tr:hover {
    	background-color: #f5f5f5;
    }
    .table1 tr:nth-child(even) {
    	background-color: #f7f7f7;
    }
  </style>
</head>


<body>
  <nav>
    <table class= "tabel_aksi">
      <tr>
        <td><a href="<?php echo base_url('index.php/C_master_data/data_master');?>"> < Kembali </a></td>
      </tr>
    </table>
  </nav>
  <h1 class="n"> <?php echo $notifikasi;?> </h1>
</body>

</html>

 