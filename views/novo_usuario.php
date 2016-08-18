

<div class="content-header">
    <h1>Novo usuário</h1>
</div>

<?php
if (isset($msg) && isset($msg['type'])):
    $messageClass = ($msg['type'] == 'success') ? 'success' : 'danger';
    ?>

    <p class="msg <?php echo 'msg-' . $messageClass; ?>"><?php echo $msg[0]; ?></p>

<?php endif; ?>
<form method="POST" class="fw-form">
    <label for="nome_user" class="fw-form-group">Nome:</label>
    <input type="text" required="true" name="nome_user" class="fw-form-group"/>
    <label for="email_user" class="fw-form-group">Email:</label>
    <input type="email" required="true" name="email_user" class="fw-form-group" placeholder="exemplo@email.com"/>
    <label for="senha_user" class="fw-form-group">Senha:</label>
    <input type="password" required="true" name="senha_user" class="fw-form-group" placeholder="******"/>
    <input type="submit" value="Enviar" name="submit_new_user" id="enviar" class="fw-form-group"/>
</form>