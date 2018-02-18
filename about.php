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

  	</style>
</head>
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
					<h3 align="center">About us</h3>
				</div>
				<div class="card-body">
					<p align="center"><img src="logo.png"></p>

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