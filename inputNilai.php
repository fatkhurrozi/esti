<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/jpg" href="img/profil.jpg">
		<title>Tanya Esti</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<style type="text/css">
      body{
        background-image: url('img/curls.png');
      }
     </style>
	<body>
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	      <div class="container">
	        <a class="navbar-brand js-scroll-trigger" style="color: white;" href="index.html"><b>Tanya Esti</b> </a>
	      </div>
	</nav>

	<div class="container" style="background-color: #F5D6F6; margin-top: 4%">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title text-center" style="background-color: salmon; color: white; border-radius: 4px;">
					Rekam Data Lama Belajar & Nilai
				</h3><br>
			</div>
			<div class="panel-body">
				<label><b> Berapa hari anda belajar ?</b></label>
				<input type="number" name="" id="banyakData" class="kolomData form-control" value="" required="required" pattern="" title=""><br>
				<button type="button" class="btn btn-primary" id="masukanBanyakData" >Buat kolom data</button>

				<a href="inputNilai.php"><button class="btn btn-danger">Reset</button></a>
				<br><hr>
				<div id="kolomData">
					<div class="panel-heading">
						<h3 class="panel-title">Lama Belajar (JAM)</h3>
					</div>
				<div class="panel-body">
					<table width="91.5%" style="text-align: center;">
						<thead>
								<tr>
									<th width="1.2%"></th>
									<th width="50%" style="background-color: salmon; color: white;">x = Durasi anda belajar</th>	
									<th width="50%" style="background-color: royalblue; color: white;">y = Nilai yang diperoleh</th>
								</tr>
						</thead>
						<tbody>
							<tr>
							</tr>
						</tbody>
					</table><br>
 					<div id="data"></div>
 					<button id="prosesData" class="btn btn-success">Proses</button>
					<br><hr>
				</div>
			</div>	
			</div>
		</div>

 	<!-- rekam data end -->

	<!-- tabel perkalian x & y start-->
	<div class="panel panel-success"  id="hasil">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Pemecahan Masalah</h3>
		</div>
		<div class="panel-body">
			<table width="90%" style="text-align: center;">
				<thead>
				<tr>
					<th width="1.2%"></th>
					<th width="20%" style="background-color: salmon; color: white;">x</th>
					<th width="20%" style="background-color: royalblue; color: white;">y</th>
					<th width="20%" style="background-color: salmon; color: white;">x2</th>
					<th width="20%" style="background-color: royalblue; color: white;">y2</th>
					<th width="20%" style="background-color: salmon; color: white;">xy</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<div id="hasilTable"></div>
		</div>
	</div>
	<!-- tabel perkalian x & y end-->


	<!-- rumus start -->
	
	<div class="panel panel-success" >
		<div class="panel-heading">
			<h3 class="panel-title">Persamaan</h3>
		</div>
		<div class="panel-body">
			<b class="btn btn-success" style="outline-color: royalblue;font-size: 22px">y = a + bX</b>
        <hr>
        <h3 class="panel-title text-center" style="background-color: salmon; color: white; ">
        	Cari Koefisen a dan b
		</h3>
        <br>
        <div id="solusiRumus" style="font-size: 20px"></div>
        <h3 class="panel-title text-center" style="background-color: salmon; color: white; ">
        	Ketemu Rumus Persamaannya
		</h3><br>
        <p style="font-size: 20px">y = a + bX</p>
        <p id="rumusnya" style="font-size: 20px"></p>
        <label><b>Masukan x (Lama belajar Berapa Jam ) :</b></label>
        <p>
            <input class="form-control" type="number" id="Xnumber"><br>
            <button class="btn btn-primary" id="cariY">Cari Y </button>
        </p>
        <p style="font-size: 20px">Estimasi Nilai yang diperoleh</p>
        <p id="hasilY" style="font-size: 20px"></p>

        <!-- korelasinya -->
        <h3 class="panel-title text-center" style="background-color: salmon; color: white; ">
        	Korelasi
		</h3><br>
        <p style="font-size: 20px">r = n&Sigma;xy - &Sigma;x&Sigma;y / &radic;((n&Sigma;X<sup>2</sup> - (&Sigma;x)<sup>2</sup>) . (n&Sigma;y<sup>2</sup> - (&Sigma;y)<sup>2</sup>)) </p>
        <p id="rumuskorelasi" style="font-size: 20px"></p>
        <p>r = <span id="korelasi" style="font-size: 20px">ini hasilnya</span></p>
        <p id="kesimpulankorelasi" style="font-size: 20px"></p>
		</div>
	</div>
	</div>
	<!-- rumus end -->
	<div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Saintek Unipdu 2018</small>
      </div>
    </div>
		<!-- jQuery -->
		<script src="assets/jquery/jquery.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>