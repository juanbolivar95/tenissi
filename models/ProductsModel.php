<?php
	/**
	 *
	 * @About:
	 * @File:        ProductsModel.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Models;


	use Tissini\DB\CrudDB;

	class ProductsModel
	{
		private $db;

		/**
		 * ProductsModel constructor.
		 */
		public function __construct()
		{
			$this->db = new CrudDB();
		}

		public function getProducts($cat): object
		{
			return $this->db->query("SELECT * FROM products WHERE id_cat = ".$cat);
		}

		public function getProductDetail($id): object
		{
			return $this->db->query("SELECT * FROM products WHERE id_product = ".$id);
		}
	}