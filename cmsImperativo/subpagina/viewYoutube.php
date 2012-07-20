<?php 
//include("../../../controller/logando.php");
include("controller/view/viewYoutube.php");
?>
<br />
<div class="acao">
<a href="inserirVideo.php">inserir video</a>&nbsp;&nbsp;&nbsp;
</div>
<br />
<div class="corpodados">
<object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/L3eiOMQVUqs&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.youtube.com/v/L3eiOMQVUqs&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="425" height="344"></embed></object>
<?php
if($dados){
foreach($dados as $value){
?>
<span>título</span>
<p><?=$value['titulo']?></p>
<span>url</span>
<p><?=$value['url']?></p>
<span>descricao</span>
<p><?=$value['descricao']?></p>
<?}}?>
</div>
