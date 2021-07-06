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
                  <h3><center>TAMBAH DATA</center></h3>
                  <br/>
                  <form action="../controller/proses.php?aksi=tambah" method="post">
                  <table>
                      <tr color="black">
                          <td class="column1">NPSN : </td>
                          <td><input type="text" name="npsn"></td>
                      </tr>
                      <tr>
                          <td class="column1">Nama Sekolah : </td>
                          <td><input type="text" name="namasekolah"></td>
                      </tr>
                      <tr>
                          <td class="column1">Besaran Bantuan : </td>
                          <td><input type="text" name="besaranbantuan"></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><input type="submit" value="Simpan" class="btn btn-secondary"></td>
                      </tr>
                  </table>
                  </form>
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