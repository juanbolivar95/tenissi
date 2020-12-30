<?php
	/**
	 *
	 * @About:
	 * @File:        LoginController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Controllers;


	use Tissini\Models\LoginModel;

	class LoginController
	{
		private $model;

		/**
		 * LoginController constructor.
		 */
		public function __construct()
		{
			$this->model = new LoginModel();
		}


		public function login($phone): object
		{
			return $this->model->login($phone);
		}

	}