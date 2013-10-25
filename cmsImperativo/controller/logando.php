<?php
class Logando{

		function valida(){
			if($_SESSION['valida'] != 1){
			header("Location: erro.php");
			}		
		}
}
$logando = new Logando();
//$logando->valida();
?>