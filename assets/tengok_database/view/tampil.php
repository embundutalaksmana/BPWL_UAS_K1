<?php
include '../model/database.php';
$db = new database();
?>
<HEAD>
<title>DATA PENERIMA BANTUAN OPERASIONAL SEKOLAH AFIRMASI KABUPATEN SIAK</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!--===============================================================================================-->	
   	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="css/util.css">
   	<link rel="stylesheet" type="text/css" href="css/main.css">
   <!--===============================================================================================-->
</HEAD>
<body>
	<div class="container-table100">
    <img src="siak.png" width=90 height=75 align="left">
		<div class="container-table100">
			<div class="wrap-table100" >
             <h2><center>DATA PENERIMA BANTUAN OPERASIONAL SEKOLAH AFIRMASI</center></h2>
             <h3><center>KABUPATEN SIAK TAHUN 2020</center></h3> 
            <br/> 
	            <div class="table100">
               <a href="../view/export.php" class="btn btn-success" role="button">Export Data ke xls</a><br/>
               <a href="../view/input.php" class="btn btn-success" role="button">Input Data</a>
                   <table border="1" align="center"> 
                   <tr>
                   <th>No</th>
                     <th class="column1">NPSN</th>
                     <th class="column1">Nama Sekolah</th>
                     <th class="column1"> Besaran Bantuan</th>
                     <th>Opsi</th>
                    </tr>
                     <?php
                      $no=1;
                      foreach ($db->tampil_data() as $x) {
                     ?>
                   <tr>
                    <td><?php echo $no++; ?></td>
                    <td class="column1"><?php echo $x['NPSN']; ?></td>
                    <td class="column1"><?php echo $x['Nama_Sekolah']; ?></td>
                    <td class="column1"><?php echo $x['Besaran_Bantuan']; ?></td>
                    <td>
                      <a href="../view/edit.php?NPSN=<?php echo $x ['NPSN']; ?>&aksi=update">Edit</a>
                      <a href="../controller/proses.php?NPSN=<?php echo $x ['NPSN']; ?>&aksi=hapus">Hapus</a>
                    </td>
                   </tr>
                </div>
            </div>
        </div>
    </div>
   <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
   <!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
   <!--===============================================================================================-->
	<script src="js/main.js"></script> 	
</body>
    <?php
    }
    ?>