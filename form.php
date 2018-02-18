<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
  		img {
  			border: 2px solid #333;
  			padding: 5px 5px; 
  			height: 20%;
  			width: 20%;
  			border-radius: 10px;
  		}
  		.footer {

              position: absolute;
              bottom: 0;
              width: 100%;

              height: 60px;
              background-color: #f5f5f5;
            }

            .text-p{
                text-shadow: none;
                font-size: 14px;
                color: #999;
                padding: 20px 0 0 5px;
            }

  	</style></head>
<body>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		<a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo" style="width:30px;">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#" style="font-family: sans-serif; ">BEM KM FASILKOM UNSRI</a>
    </li>
    
  </ul>
	</nav>
<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 bg-light">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="form.php">Form</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
				</ul>
			</div>
		</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 jumbotron" style="height: 600px">
			<div class="card">
				<div class="card-header">
					<h3 align="center">Form Pendaftaran</h3>
				</div>
				<div class="card-body">
								<h2>Form Registrasi</h2>
  <form action="registproc.php">
				<table style="width: 100%;">
					<tr>
						<td>Nama:</td>

						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td><input type="text" name="nim"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="radio" name="Laki-laki"> Laki-laki<br>
							<input type="radio" name="Perempuan"> Perempuan</td>
					</tr>
					<tr>
						<td>Domisili</td>
						<td>
							<select name="domisili">
								<option>Palembang</option>
								<option>Indralaya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Dinas</td>
						<td>	
							<select name="dinas">
								<option value="PTI">PTI</option>
               <option value="Media dan Informasi">Media dan Informasi</option>
               <option value="Humas dan Diplomasi">Humas dan Diplomasi</option>
               <option value="Advokasi Kampus">Advokasi Kampus</option>
                <option value="Polkastrad">Polkastrad</option>
               <option value="Sosial Masyarakat">Sosial Masyarakat</option>
               <option value="Olahraga">Olahraga</option>
               <option value="Kreativitas Mahasiswa">Kreativitas Mahasiswa</option>
               <option value="Akademik">Akademik</option>
               <option value="Keuangan">Keuangan</option>
                <option value="PPSDM">PPSDM</option>
                 <option value="Kesekretariatan">Kesekretariatan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>
							<select name="jabatan">
								<option value="Kepala Dinas">Kepala Dinas</option>
            <option value="Staff">Kepala Divisi</option>
            <option value="Sekretaris Dinas">Sekretaris Dinas</option>
             <option value="Staff">Staff</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Daftar Bang!"></td>
					</tr>
				</table>
			</form>
				</div>
				
			</div>	
		</main>
	</div>
</div>
<footer>
          <div class="container">
            <p class="text-p"><center>© Anang Nugraha PTI</center></p>
          </div>
        </footer>
</body>
</html>