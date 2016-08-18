<?php global $settings; ?>

<div class="content-header">
    <h1>Posts</h1>
</div>
<div class="content-menu">
    <a href="<?php echo $settings['url']; ?>/posts/novo" class="fw-btn">Novo post</a>
</div>

<table class="fw-table fw-table-border">

    <thead>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data da publicação</th>
        <th>Ações</th>
    </tr>
    </thead>

    <?php if ($posts): ?>
        <?php foreach ($posts as $value): ?>
            <tr>
                <td><?php echo $value['post_id']; ?></td>
                <td><?php echo $value['post_titulo']; ?></td>
                <td><?php echo $value['post_data']; ?></td>
                <td>
                    <a href="<?php echo $settings['url']; ?>/posts/excluir/<?php echo $value['post_id']; ?>">Excluir</a>
                    |
                    <a href="<?php echo $settings['url']; ?>/posts/editar/<?php echo $value['post_id']; ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>Nenhum resultado encontrado.</td>
        </tr>
    <?php endif; ?>
</table>