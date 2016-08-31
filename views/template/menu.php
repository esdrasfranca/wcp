<ul class="menu">
    <a <?php echo (empty($settings['url_site']) ? 'href="#"' : 'href="' . $settings['url_site']) . '" target="_blank"'; ?>>
        <li>Voltar para o Site</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/usuario">
        <li>Usuários</li>
    </a>

    <a href="<?php echo $settings['url_wcp']; ?>/posts">
        <li>Posts</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/categorias">
        <li>Categorias</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/banner">
        <li>Banner</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/configuracao">
        <li>Configurações</li>
    </a>
</ul>
