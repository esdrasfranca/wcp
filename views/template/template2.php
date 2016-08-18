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
        <!--<link rel="stylesheet" href="<?php echo $settings['url']; ?>/assets/resources/bootstrap/css/bootstrap.min.css"/>-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo $settings['url']; ?>/assets/css/template2.css"/>
        <script src="<?php echo $settings['url']; ?>/resources/ckeditor/ckeditor.js"></script>
        <script src="<?php echo $settings['url']; ?>/assets/resources/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="main-container">

            <header id="main-header">
                <section class="logo">
                    <a href="<?php echo $settings['url']; ?>"><h1>WCP</h1></a>
                </section><!--logo-->
            </header>
            <nav id="main-menu">
                <?php include 'menu.php'; ?>
            </nav>
            <section id="main-content">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                <footer id="main-footer"> <strong>WCP <?php echo date('Y');?> - Todos os direitos reservados.</strong></footer>
            </section>



            <!-- SCRIPTS -->
            <script>
                CKEDITOR.replace('post', {
                    filebrowserBrowseUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?php echo $settings['url']; ?>/resources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
            </script>


    </body>
</html>