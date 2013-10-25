<?php
session_start();
include("controller/logando.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body id="duascolunas">
<div id="tudo">

<div id="topo">
<h1></h1>
</div>

<div id="nav">
<?php include("subpagina/CMSnavegacao.php")?>
</div>

<div id="principal">
<?php include("subpagina/faleConoscoResponderCMS.php")?>
</div>

<div id="apoio">
<h2>COLUNA DE APOIO</h2>
...
</div>

<div id="rodape">
<h2><p></p></h2>
</div>

</div>

</body>
</html>
