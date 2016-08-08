configurações

<form method="post">

    <table>
        <tr>
            <td><label for="url_site">URL do site</label></td>
            <td><input type="url" name="url_site" required="true"/></td>
        </tr>
        <tr>
            <td><label for="dbhost">Host do bando de dados</label></td>
            <td><input type="text" placeholder="" name="dbhost" required="true"/></td>
        </tr>

        <tr>
            <td><label for="dbname">Nome do banco de dados</label></td>
            <td><input type="text" placeholder="" name="dbname" required="true"/></td>
        </tr>
        <tr>
            <td><label for="dbuser">Usuário do bando de dados</label></td>
            <td><input type="text" placeholder="" name="dbuser" required="true"/></td>
        </tr>
        <tr>
            <td><label for="dbdrive">Driver do banco de dados</label></td>
            <td><input type="text" placeholder="" name="dbdrive" required="true"/></td>
        </tr>
        <tr>
            <td><label for="dbpassw">Senha do banco de dados</label></td>
            <td><input type="password" placeholder="" name="dbpassw" required="true"/></td>
        </tr>
        <tr>
            <td></td>
            <td>    <input type="submit" value="Salvar configurações" name="enviar"/></td>
        </tr>
    </table>



</form>
