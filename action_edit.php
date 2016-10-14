<?php
require_once './connect.php';
require_once './outcome.php';
include('lib/config.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];

$name = $_POST['name'];
$value = $_POST['value'];
$explanation = $_POST['explanation'];

$update = new outcome();
$update -> setId($id);
$update -> setName($name);
$update -> setValue($value);
$update -> setExplanation($explanation);
$update -> update();
    if($update)
	{
	header('location:index.php');
	}
}
?>