<?php
	/**
	 *
	 * @About:
	 * @File:        product-detail.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Views;

	use Tissini\Controllers\ProductsController;
?>

<div class="container mt-5">
	<div class="row justify-content-center">
		<?php
			$ctrl = new ProductsController();

			$ctrl->getProduct($_GET['id']);
		?>
	</div>
</div>