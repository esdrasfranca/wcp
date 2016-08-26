<ul class="menu">
    <a <?php echo (empty($settings['url_site']) ? 'href="#"' : 'href="' . $settings['url_site']) . '" target="_blank"'; ?>>
        <li>Ir para o Site</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/usuario">
        <li>Usuários</li>
    </a>

    <a href="<?php echo $settings['url']; ?>/posts">
        <li>Posts</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/categorias">
        <li>Categorias</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/banner">
        <li>Banner</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/configuracao">
        <li>Configurações</li>
    </a>
</ul>
