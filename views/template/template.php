<!DOCTYPE html>

<?php
global $config;
?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WCP - Work Control Panel</title>
        <link rel="stylesheet" href="<?php echo $config['url']; ?>/assets/css/oocss.css"/>
        <link rel="stylesheet" href="<?php echo $config['url']; ?>/assets/css/template.css"/>
    </head>
    <body>
        <div class="container">

            <header class="main-header">
                <section class="logo">
                    <a href="<?php echo $config['url'];?>/home"><h1>WCP</h1></a>
                </section><!--logo-->
                <nav class="menu-bar"></nav><!--menu-bar-->
            </header><!--main-header-->

            <aside class="main-sidebar">
                <section class="sidebar">
                    <?php include 'menu.php'; ?>
                </section><!--aside-->
            </aside><!--main-sidebar-->

            <div class="main-content">
                <section class="content-header"></section><!--content-header-->
                <section class="content"><?php $this->loadViewInTemplate($viewName, $viewData); ?></section><!--content-->
                <footer class="main-footer">footer</footer>
            </div><!--main-content-->
        </div><!-- container-->

    </body>
</html>