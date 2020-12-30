<?php
	/**
	 *
	 * @About:
	 * @File:        LinksHelper.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Models\utils;


	use Dotenv\Dotenv;

	class LinksHelper
	{
		public static function getLink($params) : string
		{
			$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
			$dotenv->load();

			$isHttps = $_ENV['IS_HTTPS'];

			return $isHttps == '1' ? 'https://'.$_SERVER['SERVER_NAME'].'/'.$params : 'http://'.$_SERVER['SERVER_NAME'].'/'.$params;
		}

		public static function getAssetLink($params): string
		{
			$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
			$dotenv->load();

			$isHttps = $_ENV['IS_HTTPS'];

			return $isHttps == '1' ? 'https://'.$_SERVER['SERVER_NAME'].'/views/assets/'.$params : 'http://'.$_SERVER['SERVER_NAME'].'/views/assets/'.$params;
		}
	}