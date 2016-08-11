<!DOCTYPE html>

<?php
global $settings;
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
        <link rel="stylesheet" href="<?php echo $settings['url']; ?>/assets/css/template.css"/>
        <link rel="stylesheet" href="<?php echo $settings['url']; ?>/assets/css/oocss.css"/>
        <script src="<?php echo $settings['url']; ?>/assets/js/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="container">

            <header class="main-header">
                <section class="logo">
                    <a href="<?php echo $settings['url']; ?>/home"><h1>WCP</h1></a>
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

        <!--
        ++++++++++++++++++++++++++++++++++++++++++
        Scripts 
        ++++++++++++++++++++++++++++++++++++++++++
        -->


        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('post');
        </script>
    </body>
</html>