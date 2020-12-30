<?php
	/**
	 *
	 * @About:
	 * @File:        ProductsController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Controllers;


	use Tissini\Models\ProductsModel;
	use Tissini\Models\utils\LinksHelper;

	class ProductsController
	{
		private $model;

		/**
		 * ProductsController constructor.
		 */
		public function __construct()
		{
			$this->model = new ProductsModel();
		}

		public function getProducts($cat): string
		{
			$prods = $this->model->getProducts($cat);

			$list = '';

			if($prods->num_rows > 0) {
				while ($prod = $prods->fetch_object()) {
					$list.= '<div class="col-4">
			                    <div class="card shadow p-3 mb-5 bg-white rounded">
			                        <img src="'.LinksHelper::getAssetLink('img/'.$prod->photo).'" class="card-img-top" alt="..." style="height: 300px;">
			                        <div class="card-body">
			                        	<h5 class="card-title">$'.number_format($prod->price, 2, '.', ',').'</h5>
			                            <h6 class="card-subtitle mb-2 text-muted">'.$prod->name.'</h6>
			                            <p class="card-text">'.$prod->description.'</p>
			                            <a href="'.LinksHelper::getLink('product-detail/'.$prod->id_product).'" class="btn btn-success mt-2">Ver más</a>
			                        </div>
			                    </div>
			                </div>';
				}
			}
			else {
				$list = 'No hay productos para mostrar';
			}

			return  $list;
		}

		public function getProduct($id)
		{
			$prod = $this->model->getProductDetail($id)->fetch_object();

			echo '<div class="col-8">
					  <img src="'.LinksHelper::getAssetLink('img/'.$prod->photo).'" alt="" class="img-fluid" style="height: 489px;">
				  </div>
				  <div class="col-4 shadow p-3 mb-5 bg-white rounded" style="border: 1px solid #ededed;">
				  	<div class="mt-5">
				  		<h4 class="text-center mt-4 fst-italic">'.$prod->name.'</h4>
				  		<p class="text-jusrify fst-italic fw-light mt-4">'.$prod->description.'</p>
				  		<p class="lead display-4 fst-italic fw-bolder">$'.number_format($prod->price, 2, '.', ',').'</p>
				  		<button class="btn btn-outline-danger" id="add_button" data-product="'.htmlentities(json_encode($prod)).'">Agregar al carrito</button>
				  	</div>
				  </div>';
		}

		public function getBaseProduct($id): object
		{
			return $this->model->getProductDetail($id);
		}
	}