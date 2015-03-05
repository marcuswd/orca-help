<?php include("header.php"); ?>

<!-- Open container -->
<div class="container">
	
	<?php
		// Include das páginas internas via url
		$pagAtual = $_GET['pag'];

		if($pagAtual == ""){
			echo "Home";
		}else{
			include($pagAtual.".php");
		}
	?>

<?php include("footer.php"); ?>