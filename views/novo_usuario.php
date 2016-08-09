
<?php ?>

<?php
if (isset($msg) && isset($msg['type'])):
    $messageClass = ($msg['type'] == 'success') ? 'success' : 'danger';
    ?>

    <p class="msg <?php echo 'msg-' . $messageClass; ?>"><?php echo $msg[0]; ?></p>

<?php endif; ?>
<form method="POST">
    <table>
        <tr>
            <td><label for="nome_user">Nome:</label></td>
            <td><input type="text" required="true" name="nome_user"/></td>
        </tr>
        <tr>
            <td><label for="email_user">Email:</label></td>
            <td><input type="email" required="true" name="email_user"/></td>
        </tr>
        <tr>
            <td><label for="senha_user">Senha:</label></td>
            <td><input type="password" required="true" name="senha_user"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Enviar" name="submit_new_user" id="enviar"/></td>
        </tr>
    </table>
</form>