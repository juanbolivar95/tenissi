<?php
	/**
	 *
	 * @About:
	 * @File:        template.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	use Tissini\Controllers\BaseController;
?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include 'includes/header.php'; ?>

	<title><?php echo isset($_GET['view']) ? "Tissini :: ".$_GET['view'] : "Tissini"; ?></title>
</head>

<body>
    <?php
        if(isset($_SESSION['user'])) {
	        include 'includes/menu.php';
        }
    ?>
<main>
	<?php include BaseController::setModules(); ?>
</main>

    <?php
        include 'includes/scripts.php';

       echo BaseController::setScript();
    ?>
</body>

</html>