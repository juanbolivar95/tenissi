<?php
	/**
	 *
	 * @About:
	 * @File:        CrudDB.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\DB;

	use Dotenv\Dotenv;

	class CrudDB
	{
		private $conn;

		public function __construct()
		{
			$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
			$dotenv->load();

			$this->conn = new \mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'], '', $_ENV['DATABASE_NAME']);
		}

		public function query(string $sql) : object
		{
			return $this->conn->query($sql);
		}
	}