<?php global $settings;
?>

<h1>Posts</h1>

<div>
    <a href="<?php echo $settings['url']; ?>/posts/novo">Novo post</a>
</div>

<table>

    <?php foreach ($posts as $value): ?>
        <tr>
            <td><?php echo $value['post_id'];?></td>
            <td><?php echo $value['post_titulo'];?></td>
        </tr>
    <?php endforeach; ?>
</table>