<?php
session_id();
?>
	  <div>
	  <form action="controller/logar.php" method="post">
		<fieldset>
		<legend>Login</legend>
			<label for="login">Nome de Usuário
	        <input name="login" type="text">
	        </label>	
	        
	        <label for="senha">Senha     
			<input name="senha" type="text">
	        </label> 
			
			<label for="submit">
	        <input name="submit" type="Submit" value="logar" class="botao">
	        </label>
		</fieldset>
    </form>
	</div>