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
        <div id="header-container">
            <div class="logo"></div>
        </div><!--header-container-->
        <div id="body-container">
            <div id="menu-left"></div>
            <div id="content"></div>
        </div>
        <div class="clear"></div>
        <div id="footer"></div>
    </body>
</html>
