<?php
if (isset($_SESSION['user'])) {
    $nivel = $_SESSION['user']['nivel'];
}


?>

<ul class="menu">
    <a href="<?php echo $settings['url_base']; ?>">
        <li>Voltar para o Site</li>
    </a>
    <?php if ($nivel == 0): ?>
        <a href="<?php echo $settings['url_wcp']; ?>/usuario">
            <li>Usuários</li>
        </a>
    <?php endif; ?>

    <a href="<?php echo $settings['url_wcp']; ?>/posts">
        <li>Posts</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/categorias">
        <li>Categorias</li>
    </a>
    <a href="<?php echo $settings['url_wcp']; ?>/banner">
        <li>Banner</li>
    </a>
    <!--<a href="<?php echo $settings['url_wcp']; ?>/configuracao">
        <li>Configurações</li>
    </a>-->
</ul>
