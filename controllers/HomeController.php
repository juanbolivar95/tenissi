<?php
	/**
	 *
	 * @About:
	 * @File:        HomeController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Controllers;


	use Tissini\Models\HomeModel;

	class HomeController
	{
		private $model;

		/**
		 * HomeController constructor.
		 */
		public function __construct()
		{
			$this->model = new HomeModel();
		}

		public function getCategories(): string
		{
			$cats = $this->model->getCategories();

			$list = '';

			if($cats->num_rows > 0) {
				while ($cat = $cats->fetch_object()) {
					$list.= '<div class="col-4">
			                    <div class="card shadow p-3 mb-5 bg-white rounded">
			                        <div class="card-body">
			                            <h6 class="card-subtitle mb-2 text-muted">'.$cat->name.'</h6>
			                            <p class="card-text">'.$cat->description.'</p>
			                            <a href="product-list/'.$cat->id_cat.'" class="btn btn-success mt-2">Ver más</a>
			                        </div>
			                    </div>
			                </div>';
				}
			}
			else {
				$list = 'No hay categorías para mostrar';
			}

			return  $list;
		}
	}