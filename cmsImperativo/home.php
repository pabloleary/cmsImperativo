<?php
session_start();
include("controller/logando.php");
include("controller/NewsController.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body id="duascolunas">


<div id="topo">
<?php include("navigation.php")?>
</div>


<div id="principal">
<?php include("subpagina/home.php")?>
</div>


<div id="rodape">
<h2><p></p></h2>
</div>



</body>
</html>
