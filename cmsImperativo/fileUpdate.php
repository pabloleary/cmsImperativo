<?php
session_start();
include("controller/logando.php");
include("controller/viewCategoria.php");
include("controller/viewFileUnico.php");
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body id="duascolunas">


<div id="topo">
<?php include("subpagina/navegacao.php")?>
</div>

<div id="principal">
<?php include("subpagina/update/updateUpload.php")?>
</div>

</body>
</html>
