<?php
	/**
	 *
	 * @About:
	 * @File:        cart.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Views;

	use Tissini\Controllers\CartController;

	if(isset($_SESSION['cart']) || !is_null($_SESSION['cart'])) {
		$ctrl = new CartController($_SESSION['cart']);

		$cart = $ctrl->getCart();

?>
<div class="container mt-5">
	<?php echo $cart->items; ?>
	<div class="row justify-content-end mt-2" style="border-bottom: 2px solid #ededed; padding: 2rem;">
		<div class="col-md-4 text-right" style="text-align: right;">
			<P class="lead fst-italic">Envio a todo el pais</P>
			<p class="lead display-7 fst-italic fw-bolder">Total con envío</p>
		</div>
		<div class="col-md-2 text-right" style="text-align: right;">
			<p class="lead fw-bold fst-italic" style="color: #39b54a">Gratis</p>
			<p class="lead display-7 fst-italic fw-bolder mt-2">$<?php echo number_format($cart->total, 2, '.', ','); ?></p>
		</div>
	</div>
	<div class="row row justify-content-end mt-2"  style="padding: 2rem;">
		<div class="col-md-3">
			<button class="btn btn-outline-success btn-lg" id="checkout">Finalizar Compra</button>
		</div>

	</div>
</div>


<?php }
	else {
?>

<div class="container mt-5">
	<div class="row"  style="border-bottom: 2px solid #ededed;">
		<h2>No hay productos en el carro</h2>
	</div>
</div>

<?php } ?>
