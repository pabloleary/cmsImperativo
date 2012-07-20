<?php
session_start();
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogandoFront
 *
 * @author Fiber
 */
include 'Login.php';
include '../model/Conecta.php';
include '../model/dao/DaoLogar.php';

class LogandoFront {

    private $conecta;
    private $dao;
    

    public function __construct() {
        $this->conecta  = new Conecta();
         $this->dao     = new DaoLogar($this->conecta);
    }


		function valida($login,$senha){
			$login = new Login($login,$senha,$this->dao);
            return $login->logar();
			}
		
}
$logando = new LogandoFront();

$result = $logando->valida($_POST["login"],$_POST["senha"]);

$_SESSION["logado"] = $result->login;



header("Location: ../../aprobas/index.php")
?>