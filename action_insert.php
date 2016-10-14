<?php
require_once './connect.php';
require_once './outcome.php';

$name = $_POST['name'];
$value = $_POST['value'];
$explanation = $_POST['explanation'];

$outcome = new Outcome();
$outcome->setName($name);
$outcome->setValue($value);
$outcome->setExplanation($explanation);
try {
    $outcome->insert();
} catch (Exception $e) {
    $e->getMessage();
}
if ($outcome){
       header('location:index.php');
    } else { header('location:insert.php');
    }
?>
