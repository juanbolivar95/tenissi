<?php
	/**
	 *
	 * @About:
	 * @File:        index.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	session_start();

	include "vendor/autoload.php";

	use Tissini\Controllers\BaseController;

	BaseController::getTemplate();