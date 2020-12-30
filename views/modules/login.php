<?php
	/**
	 *
	 * @About:
	 * @File:        login.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <form id="login_form" onsubmit="return false;">
                <img class="mb-4" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/views/assets/img/tecnology.jpg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                <label for="phone" class="visually-hidden">Número de teléfono</label>
                <input type="tel" id="phone" class="form-control" placeholder="Número de teléfono" required autofocus>
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</div>