<ul class="menu">
    <a <?php echo (empty($settings['url_site']) ? 'href="#"' : 'href="' . $settings['url_site']) . '" target="_blank"'; ?>>
        <li>Voltar para o Site</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/wcp/usuario">
        <li>Usuários</li>
    </a>

    <a href="<?php echo $settings['url']; ?>/wcp/posts">
        <li>Posts</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/wcp/categorias">
        <li>Categorias</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/wcp/banner">
        <li>Banner</li>
    </a>
    <a href="<?php echo $settings['url']; ?>/wcp/configuracao">
        <li>Configurações</li>
    </a>
</ul>
