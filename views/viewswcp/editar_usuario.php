<div class="content" style="width: 50%;">
    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Editar Usuário</h1>
        </div>

        <?php if (isset($msg)): ?>
            <p class="msg msg-<?php echo $msg['type']; ?>"><?php echo $msg['message']; ?></p>
        <?php endif; ?>

        <form method="POST" class="fw-form">
            <input type="hidden" name="id" value="<?php echo $usuario[0]['user_id']; ?>"/>

            <label for="nome" class="fw-form-group">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $usuario[0]['user_name']; ?>" required="true" class="fw-form-group"/>

            <label for="email" class="fw-form-group">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario[0]['user_email']; ?>" required="true" class="fw-form-group">

            <input type="submit" value="Enviar" name="alterar" class="fw-btn fw-btn-success"/>
        </form>
    </div>
</div>