<?php
	/**
	 *
	 * @About:
	 * @File:        home.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Views;

	use Tissini\Controllers\HomeController;
?>

<div class="container mt-5">
	<div class="row">
		<?php
			$home = new HomeController();

			echo $home->getCategories();
		?>
	</div>
</div>