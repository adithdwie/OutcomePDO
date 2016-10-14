

<?php
session_start();
include "lib/config.php";

//kolom apa saja yang akan ditampilkan
$columns = array(
	'id',
	'name',
	'value',
	'explanation',
	'reg_date'
	);

//lakukan query data dari 3 table dengan inner join
	$query = $datatable->get_custom("select id, name, value, explanation, reg_date from outcomePDO",$columns);

	//buat inisialisasi array data
	$data = array();

	foreach ($query	as $value) {

	//array sementara data
	$ResultData = array();
	//masukan data ke array sesuai kolom table
	$ResultData[] = $value->id;
	$ResultData[] = $value->name;
	$ResultData[] = $value->value;
	$ResultData[] = $value->explanation;
	$ResultData[] = $value->reg_date;

	//bisa juga pake logic misal jika value tertentu maka outputnya

	//kita bisa buat tombol untuk keperluan edit, delete, dll, 
	$ResultData[] = "<a href='edit.php?id=".$value->id."' class='btn btn-primary'>Edit</a> 
<a href='delete.php?id=".$value->id."' class='btn btn-danger'>Hapus</a> ";	

	//memasukan array ke variable $data
	$data[] = $ResultData;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();
