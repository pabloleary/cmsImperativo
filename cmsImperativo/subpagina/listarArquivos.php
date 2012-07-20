<br />
<div class="acao">
<a href="arquivosUpload.php">upload de arquivos</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Inserir Categoria</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Visualizar Categorias</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<th align="left">nome Arquivo</th>
<th align="left">categoria</th>
<th align="left">data</th>
<th align="left">status</th>
<!--
<th>despublicar</th>
-->
<th>editar</th>
<th>apagar</th>
</tr>
<? 
if($dados){
foreach($dados as $value){?>
<tr>
   <td> 
   
      <?=$value['nome']?>
    </td>
    <td><?=$value['categoria']?></td>
    <td align="left"><?=$value['data']?></td>
    <td align="left"> 
      <?=$value['status']?>
    </td>
 	 <!--
	 <td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
	-->
	 <td align="center">
  <a href="fileUpdate.php?id=<?=$value['id']?>"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
		 <a href="controller/delete/deleteArquivo.php?id=<?=$value['id']?>">
			<img src="img/apagar.gif"/>
		 </a>
    </td>
</tr>
<?}}
?>
	</table>

</div>