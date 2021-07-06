<?php
include '../model/database.php';
$db = new database();
?>
<head>
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
</head>
<body>
   <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                <h3><center>EDIT DATA</center></h3>
                <br/>
                 <form action = "../controller/proses.php?aksi=update" method="post">
                 <?php
                 foreach($db->edit_tampilan($_GET['NPSN']) as $d){
                 ?>
                 <table>
                     <tr>
                         <td class="column1">Nama Sekolah</td>
                         <td>
                             <input type="hidden" name="npsn" value="<?php echo $d['NPSN']?>">
                             <input type="text" name="namasekolah" value="<?php echo $d['Nama_Sekolah']?>">
                         </td>
                     </tr>
                     <tr>
                         <td class="column1">Besaran Bantuan</td>
                         <td>
                             <input type="text" name="besaranbantuan" value="<?php echo $d['Besaran_Bantuan']?>">
                         </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td><input type="submit" value="update" class="btn btn-secondary"></td>
                     <tr>
                 </table>
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