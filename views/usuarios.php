<?php
global $settings;
?>
<h1>Usuários</h1>

<div class="menu">
    <a href="<?php echo $settings['url']; ?>/usuario/novo">Novo usuário</a>
</div>


<table>
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
                    <td><a href="<?php echo $settings['url']; ?>/usuario/excluir/<?php echo $value['user_id']; ?>">Excluir</a></td>
                    <td><a href="<?php echo $settings['url']; ?>/usuario/editar/<?php echo $value['user_id']; ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td>Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>

</table>
