<?php
	/**
	 *
	 * @About:
	 * @File:        product-list.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Views;
?>

<div class="container mt-5">
	<div class="row">
		<?php

		use Tissini\Controllers\ProductsController;

		$home = new ProductsController();

		echo $home->getProducts($_GET['id']);
		?>
	</div>
</div>
