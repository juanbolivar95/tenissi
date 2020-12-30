<?php
	/**
	 *
	 * @About:
	 * @File:        LoginModel.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Models;

	session_start();

	use Tissini\DB\CrudDB;

	class LoginModel
	{
		private $db;

		/**
		 * LoginModel constructor.
		 */
		public function __construct()
		{
			$this->db = new CrudDB();
		}

		public function login($phone): object
		{
			$login = $this->db->query("SELECT * FROM users WHERE phone = '".$phone."'");

			$resp = (object) array();

			if($login == false) {
				$resp = (object) array('error' => true, 'message' => 'Query failed', 'user' => null);
			}
			else {

				if($login->num_rows > 0) {

					$_SESSION['user'] = $login->fetch_object();
					$resp = (object) array('error' => false, 'message' => 'User found', 'user' => $_SESSION['user']);
				}
				else {
					$resp = (object) array('error' => true, 'message' => 'User not found', 'user' => null);
				}

			}

			return $resp;
		}
	}