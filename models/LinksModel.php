<?php
	/**
	 *
	 * @About:
	 * @File:        LinksModel.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Models;


	class LinksModel
	{
		private $links;

		public function __construct()
		{
			$this->links = array("home", "login", "categories", "product-list", "product-detail", "cart");
		}

		public function getModule($link): string
		{
			$found = false;
			$dash = false;

			if($link == "dashboard")
			{
				$dash = true;
			}
			if(in_array($link, $this->links))
			{
				if(file_exists("views/modules/".$link.".php"))
				{
					$found = true;
					$module = "views/modules/".$link.".php";
				}
				else
				{
					$module = "views/modules/404.php";
				}
			}
			else
			{
				$module = "views/modules/404.php";
			}

			//return (object) array('module' => $module, 'found' => $found, 'dash' => $dash);

			return $module;
		}

		public function getScript($script): string
		{
			if(in_array($script, $this->links))
			{
				$js = "views/modules/js/".$script.".js";
			}
			else
			{
				$js = "views/modules/js/dashboard.js";
			}

			if(file_exists($js))
			{
				return $js;
			}
			else
			{
				return "nothing";
			}
		}
	}