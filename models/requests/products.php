<?php
	/**
	 *
	 * @About:
	 * @File:        products.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Requests;

	session_start();

	require __DIR__ .'/../../vendor/autoload.php';

	use Tissini\Controllers\ProductsController;

	$ctrl = new ProductsController();

	switch ($_POST['type']) {
		case 'add_to_cart':
			if(isset($_SESSION['cart'])) {
				array_push($_SESSION['cart'], $_POST['id_product']);
			}
			else {
				$_SESSION['cart'] = array();
				array_push($_SESSION['cart'], $_POST['id_product']);
			}

			echo 'ok';
		break;

		case 'checkout':
			$_SESSION['cart'] = null;

			echo 'ok';
		break;
	}