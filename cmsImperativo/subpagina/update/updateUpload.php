<br />
<div class="acao">
    <a href="arquivos.php">visualizar arquivos</a>&nbsp;&nbsp;&nbsp;
    <a href="criarCategoria.php">Inserir Categoria</a>
</div>
<br />
<div class="corpodados">
    <form method="post" action="controller/update/updateArquivo.php?id=<?=$dados['id']?>" enctype="multipart/form-data" id="myform">
        <label for="filename">Título
            <input id="filename" type="text" name="filename" value="<?=$dados['nome']?>"/>
        </label><br />

        <label for="arquivo1">Descrição
            <textarea name="descricao"><?=$dados["descricao"]?> </textarea>
        </label><br />

        <label for="categoria">Categoria
            <select name="categoria">

                <option value="<?=$dados["categoria"]?>"><?=$dados["categoria"]?></option>

            </select>
        </label><br />
        <label for="status" class="radio">Disponibilidade
            publico <input type="radio" name="status" value="publico" class="radio" >
            privado <input type="radio" name="status" value="privado" class="radio">
        </label><br />

        <label for="botao">
            <input id="botao" type="submit" name="submit" value="cadastrar" class="botao"/>
        </label>
    </form>
</div>