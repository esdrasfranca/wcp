<h1>Editar Usuário</h1>

<?php if (isset($msg)): ?>
    <p class="msg msg-<?php echo $msg['type']; ?>"><?php echo $msg['message']; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario[0]['user_id']; ?>"/>
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="<?php echo $usuario[0]['user_name']; ?>" required="true"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="<?php echo $usuario[0]['user_email']; ?>" required="true"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Enviar" name="alterar"/></td>
        </tr>
    </table>
</form>
