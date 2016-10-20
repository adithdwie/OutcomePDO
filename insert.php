
<!DOCTYPE html>
<html>
<head>
	<title> Menu Tambah Outcome </title>
	<link rel="stylesheet" type="text/css" href=".//media/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./media/js/jquery.js"></script>
	<script type="text/javascript" src="./media/js/bootstrap.min.js"></script>
	<style type="text/css">
	.navbar {
      	margin-bottom: 0;
      	background-color: #f4511e;
      	z-index: 9999;
      	border: 0;
      	font-size: 12px !important;
      	line-height: 1.42857143 !important;
      	letter-spacing: 4px;
      	border-radius: 0;
      	font-family: Montserrat, sans-serif;
  	}
  	.navbar li a, .navbar .navbar-brand {
      	color: #fff !important;
  	}
  	.navbar-nav li a:hover, .navbar-nav li.active a {
     	color: #f4511e !important;
      	background-color: #fff !important;
  	}
  	.navbar-default .navbar-toggle {
      	border-color: transparent;
      	color: #fff !important;
  	}
  	.container-fluid {
      padding: 60px 50px;
  	}
  	.panel {
	      border: 1px solid #f4511e;
	      border-radius:0 !important;
	      transition: box-shadow 0.5s;
	  }
	  .panel:hover {
	      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
	  }
	  .panel-footer .btn:hover {
	      border: 1px solid #f4511e;
	      background-color: #fff !important;
	      color: #f4511e;
	  }
	  .panel-heading {
	      color: #fff !important;
	      background-color: #f4511e !important;
	      padding: 25px;
	      border-bottom: 1px solid transparent;
	      border-top-left-radius: 0px;
	      border-top-right-radius: 0px;
	      border-bottom-left-radius: 0px;
	      border-bottom-right-radius: 0px;
	  }
	  .panel-footer {
	      background-color: white !important;
	  }
	  .panel-footer h3 {
	      font-size: 32px;
	  }
	  .panel-footer h4 {
	      color: #aaa;
	      font-size: 14px;
	  }
	  .panel-footer .btn {
	      margin: 15px 0;
	      background-color: #f4511e;
	      color: #fff;
	  }
	</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style = 'margin : 20px; font-family: arial; font-size: 16px;'>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#myPage"><img width="100px" height="20px" src="logo.png"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">home</a></li>
	        <li class="active"><a href="insert.php">tambah Outcome</a></li>
	        <li><a href="balance.php">Saldo</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div id="pricing" class="container-fluid"> 
	  <div class="col-sm-3">
	  </div>
		<div class="row slideanim">
		 <div class="col-sm-6">
		  <div class="panel panel-default text-center">
		   <div class="panel-heading">
		   	<h1>Insert Tabel Outcome</h1>
		   </div>
		   <div class="panel-body">
		    <div class="form-group">
		   	<form method = 'POST' action = 'action_insert.php'>
			 <label for='name'>Nama Pengeluaran :</label> 
			 <input type = 'text' class='form-control' name = 'name' placeholder="Nama Pengeluaran" />
			</div>
			<div class="form-group">
			 <label for='value'>Nilai Pengeluaran :</label>
			 <input type = 'number' class="form-control" name = 'value' placeholder="Nilai Pengeluaran" />
			</div>
			<div class="form-group"> 
			 <label for='explanation'>Keterangan :</label> 
			 <input type = 'text' class="form-control" placeholder='Keterangan' name = 'explanation'/>
		    </div>
		    </div>
			 <div class="panel-footer">
			   <button type = 'submit' class="btn btn-success" name = 'submit' value = 'Submit'>Submit</button>
			   <button type = 'reset' class="btn btn-warning" name = 'Reset' value = 'Reset' />Reset</button> 
			   <a class="btn btn-link" href = 'index.php'> Kembali </a>
		     </div>
			</form>
		    <!--div for panel panel-default text-center-->
		   </div>
		   <!--div for col-sm-6-->	
	    </div>
	  <!--div for row slide anim-->  
	  </div>
	 <!--div for pricing-->
	</div> 
</body>
<script>
</script>
</html>