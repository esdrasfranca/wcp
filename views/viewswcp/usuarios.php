<?php
global $settings;
?>

<div class="content">

    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Usuários</h1>
        </div><!--content-header-->


        <div class="content-menu">
            <a href="<?php echo $settings['url_wcp']; ?>/usuario/novo" class="fw-btn fw-btn-primary">Novo usuário</a>
        </div>


        <table class="fw-table fw-table-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($usuarios) && count($usuarios) > 0): ?>

                    <?php foreach ($usuarios as $value): ?>
                        <tr>
                            <td><?php echo $value['user_name']; ?></td>
                            <td><?php echo $value['user_email']; ?></td>
                            <td>
                                <a href="<?php echo $settings['url_wcp']; ?>/usuario/excluir/<?php echo $value['user_id']; ?>">Excluir</a> |
                                <a href="<?php echo $settings['url_wcp']; ?>/usuario/editar/<?php echo $value['user_id']; ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td>Nenhum registro encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>