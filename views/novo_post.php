<?php
global $settings;
?>

<div class="content">

    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Novo Post</h1>
        </div>

        <form method="post" action="<?php echo $settings['url']; ?>/posts" class="fw-form" enctype="multipart/form-data">

            <label for="titulo" class="fw-form-group">Título do post</label>
            <input type="text" id="titulo" name="titulo" required="true" class="fw-form-group"/>

            <label for="descricao" class="fw-form-group">Descrição</label>
            <textarea id="descricao" name="descricao" class="fw-form-group" rows="5"></textarea>
            
            <label for="imagem" class="fw-form-group">Imagem</label>
            <input type="file" name="image" id="imagem" class="fw-form-group"/>
            
            <label for="categoria" class="fw-form-group">Categoria</label>
            <select id="categoria" name="categoria" required="true" class="fw-form-group fw-form-group-select" >
                <option value="" disabled="true" selected><strong>Escolha uma categoria</strong></option>
                <?php foreach ($categorias as $key => $value) : ?>
                    <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
                <?php endforeach; ?>
            </select>
            
            <label for="post" class="fw-form-group">Conteúdo do post</label>
            <textarea id="post" name="post" class="fw-form-group"></textarea><br/>
            <input type="submit" name="enviar" value="Enviar" class="fw-btn fw-btn-success"/>
        </form>
    </div>

</div>