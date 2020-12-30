<?php
	/**
	 *
	 * @About:
	 * @File:        login.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Requests;

	require __DIR__ .'/../../vendor/autoload.php';

	use Tissini\Controllers\LoginController;

	$ctrl = new LoginController();

	echo json_encode($ctrl->login($_POST['phone']));