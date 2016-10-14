<?php
require_once './connect.php';
require_once './outcome.php';
include('lib/config.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];
$delete = new outcome();
$delete -> setId($id);
$delete -> delete();
    if($delete)
	{
	header('location:index.php');
	}
}
?>