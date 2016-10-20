<?php
require_once './connect.php';
require_once './outcome.php';
include('lib/config.php');
$outcome = new Outcome();
$data = $outcome->getAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menampilkan Tabel OutcomePDO</title>
        <link rel="stylesheet" type="text/css" href="./media/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./media/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./media/extensions/Responsive/css/responsive.bootstrap.min.css">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="./media/js/jquery.min.js"></script>
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
    .
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
                      <a class="navbar-brand" href=""><img width="100px" height="20px" src="logo.png"></a>
                    </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">home</a></li>
                    <li><a href="insert.php">tambah Outcome</a></li>
                    <li><a href="balance.php">Saldo</a></li>
                  </ul>
                </div>      
             </div>
         </nav>
             <div id = "index" class="container-fluid">
                <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
						<h1>
						    Tabel Data Outcome 
						</h1>
					     </div>
                    <div class="panel-footer">
                    <table id="example" class="table table-bordered table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                       <thead>
                        <tr>
                        <a href="insert.php" class = "btn btn-primary">Add New Row</a>
                         <th>ID</th>
                         <th>Nama Pengeluaran</th>
                         <th>Nilai Pengeluaran</th>
                         <th>Keterangan</th>
                         <th>Tanggal</th>
                         <th>Actions</th>
                        </tr>
                        </thead>  
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                         <th>ID</th>
                         <th>Nama Pengeluaran</th>
                         <th>Nilai Pengeluaran</th>
                         <th>Keterangan</th>
                         <th>Tanggal</th>
                         <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
                  </div>
                </div>
    		    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
    		      <div class="modal-dialog">
    		        <div class="modal-content">
    		          <div class="modal-header">
    		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
    		            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
    		          </div>
    		          <div class="modal-body">
    		            <div class="alert alert-danger">
    		              <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
    		            </div>
    		          </div>
    		          <div class="modal-footer ">
    		            <a href="delete.php?id=<?php echo htmlentities($_SERVER["PHP_SELF"])?>"><button type="button" class="btn btn-success" id="delete"><span class="glyphicon glyphicon-ok-sign"></span>Yes</button></a>
    		            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
    		          </div>
    		        </div>
    		      </div>
    		    </div>
            <script type="text/javascript" language="javascript" src="./media/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/extensions/Responsive/js/dataTables.responsive.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
            <script>
            $(document).ready(function() {
                $("#example").dataTable({
                   'bProcessing': true,
                    'bServerSide': true,
         
                    //disable order dan searching pada tombol aksi
                         "columnDefs": [ {
                      "targets": [0-1,5],
                      "orderable": false,
                      "searchable": false
                        
                    } ],
                    "ajax":{
                      url :"data.php",
                    type: "post", data: function ( d ) {
                              d.jurusan = "3223";

                          },  
                    error: function (xhr, error, thrown) {
                    console.log(xhr);
                    }
                  },
                });
              });
    </script>
	</script>
    </body>
</html>

