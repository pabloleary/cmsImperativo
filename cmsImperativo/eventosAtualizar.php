<?php
session_start();
include("controller/viewEventoUnico.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div id="topo">
<? include("subpagina/navegacao.php")?>
</div>

<div id="principal">
<? include("subpagina/update/atualizarEvento.php")?>
</div>

<div id="rodape">
<h2><p></p></h2>
</div>



</body>
</html>