<!DOCTYPE html>
<?php global $settings;?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="<?php echo $settings['url_base']?>/assets/css/style_default.css">
</head>
<body>

<div class="header">
    <h1>WCP - Work Control Panel</h1>
</div>
<div class="content">
    <?php $this->loadViewInTemplateSITE($viewName, $viewData); ?>
</div>

</body>
</html>