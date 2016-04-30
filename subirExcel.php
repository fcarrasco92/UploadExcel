<?php
	/** Incluir la ruta **/
	require_once 'Excel/reader.php';
	$archivo=$_FILES['file-es']["name"][0];

	$data = new Spreadsheet_Excel_Reader();
	$data->setOutputEncoding('CP1251');
	$data->read($archivo);
		
	for ($i=2; $i <= count($data->sheets[0]['cells']); $i++) {
	 	/*echo $data->sheets[1]['cells'][$i][1]."   ";
	 	echo $data->sheets[1]['cells'][$i][2]."<br>";*/
	}
	// prueba
	$output = array('uploaded' => 'OK' );
	echo json_encode($output); 
	
?>