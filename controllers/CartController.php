<?php
	/**
	 *
	 * @About:
	 * @File:        CartController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Controllers;


	use Tissini\Models\ProductsModel;
	use Tissini\Models\utils\LinksHelper;

	class CartController
	{
		private $data;

		/**
		 * CartController constructor.
		 * @param $data
		 */
		public function __construct($data)
		{
			$this->data = $data;
		}

		public function getCart(): object
		{
			$list = '<div class="row"  style="border-bottom: 2px solid #ededed;">';

			$pModel = new ProductsModel();
			$total = 0;

			for($i = 0; $i < count($this->data); $i++) {
				$prod = $pModel->getProductDetail($this->data[$i])->fetch_object();

				$list.='<div class="col-2">
							<img src="'.LinksHelper::getAssetLink('img/'.$prod->photo).'" alt="" class="img-fluid">
						</div>
						<div class="col-4">
							<h4 class="mt-4 fst-italic">'.$prod->name.'</h4>
							<p class="text-jusrify fst-italic fw-light mt-4">Envio Gratis</p>
						</div>
						<div class="col-3">
							<h4 class="text-end mt-4 fst-italic" style="border: 1px solid #ededed; padding: 5px; width: 66px;"> - 1 +</h4>
						</div>
						<div class="col-2">
							<p class="lead display-6 fst-italic fw-bolder mt-2">$'.number_format($prod->price, 2, '.', ',').'</p>
						</div>';

				$total+= $prod->price;
			}

			$list.='</div>';

			return (object) array('items' => $list, 'total' => $total);
		}
	}