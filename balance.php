<?php
require_once './connect.php';
require_once './outcome.php';
include('lib/config.php');
?>
<?php if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$edit = new outcome();
		$data = $edit -> get($id);
        foreach ($data as $key => $value){
        	$array = array();
            $array[] = $value['name'];
            $array[] =  $value['value'];
            $array[] = $value['explanation'];
            $array[] = $value['id'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Menampilkan Tabel Data Saldo </title>
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
	        <li><a href="insert.php">tambah Outcome</a></li>
	        <li class="active"><a href="balance.php">Saldo</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div id="edit" class="container-fluid"> 
	 <div class="col-sm-3">
	  </div>
		 <div class="col-sm-6">
		  <div class="panel panel-default text-center">
		   <div class="panel-heading">
		   	<h1>Tabel Data Saldo</h1>
		   </div>
		   <div class="panel-body">
		    <table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Extn.</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Extn.</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
		        </tfoot>
		    </table>
			</form>
		    <!--div for panel panel-default text-center-->
		   </div>
		   <!--div for col-sm-6-->	
	    </div>
	 <!--div for pricing-->
	</div> 
    <script type="text/javascript" language="javascript" src="./media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="./media/extension/Buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="./media/extension/Select/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="./media/js/dataTables.editor.min.js"></script>
		<script>
			var editor; // use a global for the submit and return data rendering in the examples
			 
			$(document).ready(function() {
			    editor = new $.fn.dataTable.Editor( {
			        ajax: "../php/staff.php",
			        table: "#example",
			        fields: [ {
			                label: "First name:",
			                name: "first_name"
			            }, {
			                label: "Last name:",
			                name: "last_name"
			            }, {
			                label: "Position:",
			                name: "position"
			            }, {
			                label: "Office:",
			                name: "office"
			            }, {
			                label: "Extension:",
			                name: "extn"
			            }, {
			                label: "Start date:",
			                name: "start_date",
			                type: "datetime"
			            }, {
			                label: "Salary:",
			                name: "salary"
			            }
			        ]
			    } );
			 
			    var table = $('#example').DataTable( {
			        dom: "Bfrtip",
			        ajax: "../php/staff.php",
			        columns: [
			            { data: null, render: function ( data, type, row ) {
			                // Combine the first and last names into a single table field
			                return data.first_name+' '+data.last_name;
			            } },
			            { data: "position" },
			            { data: "office" },
			            { data: "extn" },
			            { data: "start_date" },
			            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
			        ],
			        select: true,
			        buttons: [
			            { extend: "create", editor: editor },
			            { extend: "edit",   editor: editor },
			            {
			                extend: "remove",
			                editor: editor,
			                formMessage: function ( e, dt ) {
			                    var rows = dt.rows( e.modifier() ).data().pluck('first_name');
			                    return 'Are you sure you want to delete the entries for the '+
			                        'following record(s)? <ul><li>'+rows.join('</li><li>')+'</li></ul>';
			                }
			            }
			        ]
			    } );
			} );
		</script>
	</body>
</html>