<?php
require_once './connect.php';
require_once './outcome.php';
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
        <link rel="stylesheet" type="text/css" href="./media/css/responsive.bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href=".//media/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./media/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./media/js/jquery.js"></script>
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
                    <li><a href="insert.php#pricing">tambah Outcome</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                  </ul>
                </div>      
             </div>
         </nav>
             <div id = "index" class="container-fluid">
                <div class="col-sm-10">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Tabel Data Outcome</h2>
                    </div>
                    <div class="panel-footer">
                    <table id="example" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                       <thead>
                        <tr>
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
                    </table>
                    </div>
                  </div>
                </div>
                <div class=>
                <div class="col-sm-2">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                    Tambah data Outcome
                    </div>  
                    <div class="panel-footer">
                      <a href="insert.php#pricing" class = "btn btn-primary">Add New Row</a>
                    </div>
                </div>
          </div>
            <script type="text/javascript" language="javascript" src="./media/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/js/dataTables.responsive.min.js"></script>
            <script type="text/javascript" language="javascript" src="./media/js/responsive.bootstrap.min.js"></script>
            <script>
            $(document).ready(function() {
                $("#example").dataTable({
                   'bProcessing': true,
                    'bServerSide': true,
         
                    //disable order dan searching pada tombol aksi
                         "columnDefs": [ {
                      "targets": [0,3],
                      "orderable": false,
                      "searchable": false
                        
                    } ],
                    "ajax":{
                      url :"data.php",
                    type: "post",  // method  , by default get
                    //bisa kirim data ke server
                    /*data: function ( d ) {
                      
                              d.jurusan = "3223";
                          },*/
                    error: function (xhr, error, thrown) {
                    console.log(xhr);
                    }
                  },
                });
            });
    </script>
    </body>
</html>