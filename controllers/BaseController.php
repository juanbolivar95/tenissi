<?php
	/**
	 *
	 * @About:
	 * @File:        BaseController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/
	
	namespace Tissini\Controllers;

	use Tissini\Models\LinksModel as linksM;
	
	class BaseController
	{
		public static function getTemplate()
		{
			include 'views/template.php';
		}


		public static function setModules(): string
		{
			$linksModel = new linksM();

			if (isset($_SESSION['user'])) {
				if (isset($_GET['view'])) {
					$link = $_GET['view'];
				} else {
					$link = "home";
				}
			} else {
				if (isset($_GET['view'])) {
					if ($_GET['view'] == "activate") {
						$link = $_GET['view'];
					} else {
						$link = "login";
					}
				} else {
					$link = "login";
				}
			}

			return $linksModel->getModule($link);

		}

		public static function setScript(): string
		{
			$linksModel = new linksM();

			if (isset($_SESSION['user'])) {
				if (isset($_GET['view'])) {
					$link = $_GET['view'];
				} else {
					$link = "dashboard";
				}
			} else {
				if (isset($_GET['view'])) {
					if ($_GET['view'] == "activate") {
						$link = $_GET['view'];
					} else {
						$link = "login";
					}
				} else {
					$link = "login";
				}
			}

			$script = $linksModel->getScript($link);

			return $script != "nothing" ? "<script src = 'http://".$_SERVER['HTTP_HOST']."/$script'></script>" : "";
		}
	}