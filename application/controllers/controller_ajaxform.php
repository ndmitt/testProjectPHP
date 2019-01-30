<?php
class Controller_Ajaxform extends Controller
{
	function __construct()
	{
		$this->model = new Model_Ajaxform();
	}
	
	function action_save()
	{
        $result = array (
            'inputFirstName' => $_POST["inputFirstName"],
            'inputLastName' => $_POST["inputLastName"],
            'inputDate' => !empty($_POST["inputDate"])? $_POST["inputDate"] : "0000-00-00",
            'inputCompany' => !empty($_POST["inputCompany"])? $_POST["inputCompany"] : "Не указано",
            'inputAppointment' => !empty($_POST["inputAppointment"])? $_POST["inputAppointment"] : "Не указано",
            'inputPhone' => !empty($_POST["inputPhone"])? $_POST["inputPhone"] : "Не указано"
        );
        $this->model->write_data('file.csv', $result);		
	}
}