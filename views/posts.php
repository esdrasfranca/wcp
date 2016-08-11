<?php global $settings; ?>

<h1>Posts</h1>

<div>
    <a href="<?php echo $settings['url']; ?>/posts/novo">Novo post</a>
</div>

<table>
    <?php if ($posts): ?>
        <?php foreach ($posts as $value): ?>
            <tr>
                <td><?php echo $value['post_id']; ?></td>
                <td><?php echo $value['post_titulo']; ?></td>
                <td><?php echo $value['post_data']; ?></td>
                <td>
                    <a href="<?php echo $settings['url']; ?>/posts/excluir/<?php echo $value['post_id']; ?>">Excluir</a>
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