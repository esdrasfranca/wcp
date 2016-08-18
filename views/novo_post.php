<?php
global $settings;
?>
<div class="content-header">
    <h1>Novo Post</h1>
</div>

<form method="post" action="<?php echo $settings['url']; ?>/posts" class="fw-form">

    <label for="titulo" class="fw-form-group">Título do post</label>
    <input type="text" id="titulo" name="titulo" required="true" class="fw-form-group"/>
    <label for="descricao" class="fw-form-group">Descrição</label>
    <input type="text" id="descricao" name="descricao" class="fw-form-group"/>
    <label for="categoria" class="fw-form-group">Categoria</label>
    <select id="categoria" name="categoria" required="true" class="fw-form-group fw-form-group-select" >
        <option value="" disabled="true" selected><strong>Escolha uma categoria</strong></option>
        <?php foreach ($categorias as $key => $value) : ?>
            <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
        <?php endforeach; ?>
    </select>
    <textarea id="post" name="post" class="fw-form-group"></textarea>
    <input type="submit" name="enviar" value="Enviar" class="fw-form-group"/>
</form>