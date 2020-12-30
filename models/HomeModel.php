<?php
	/**
	 *
	 * @About:
	 * @File:        HomeModel.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Models;


	use Tissini\DB\CrudDB;

	class HomeModel
	{
		private $db;

		/**
		 * HomeModel constructor.
		 */
		public function __construct()
		{
			$this->db = new CrudDB();
		}

		public function getCategories(): object
		{
			return $this->db->query("SELECT * FROM categories WHERE 1");
		}
	}