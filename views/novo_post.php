<h1>Novo Post</h1>

<form method="post">
    
    <table>
        <tr>
            <td><label for="titulo_post">Título do post</label></td>
            <td><input type="text" id="titulo_post" name="titulo_post" required="true"/></td>
        </tr>
        <tr>
            <td><label for="desc_post">Descrição</label></td>
            <td><input type="text" id="desc_post" name="desc_post" /></td>
        </tr>
    </table>
    <textarea id="post" name="post"></textarea>
    <input type="submit" name="enviar" value="Enviar"/>
</form>