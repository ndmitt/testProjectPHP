<?php

if (isset($_POST["inputFirstName"]) && isset($_POST["inputLastName"])) { 

    $result = array (
    	'inputFirstName' => $_POST["inputFirstName"],
    	'inputLastName' => $_POST["inputLastName"],
    	'inputDate' => !empty($_POST["inputDate"])? $_POST["inputDate"] : "0000-00-00",
    	'inputCompany' => !empty($_POST["inputCompany"])? $_POST["inputCompany"] : "Не указано",
    	'inputAppointment' => !empty($_POST["inputAppointment"])? $_POST["inputAppointment"] : "Не указано",
    	'inputPhone' => !empty($_POST["inputPhone"])? $_POST["inputPhone"] : "Не указано"
    ); 

    $fp = fopen('file.csv', 'a');
    fputs($fp, chr(0xEF) . chr(0xBB) . chr(0xBF));
	fputcsv($fp, $result, ';', '"');
    fclose($fp);
    echo json_encode($result); 
} 
?>