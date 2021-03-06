<?php
global $settings;
?>


<div class="content">
    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Editar Post</h1>
        </div>
        <form method="post" class="fw-form" enctype="multipart/form-data">

            <label for="titulo" class="fw-form-group">Título do post</label>
            <input type="text" id="titulo" name="titulo" required="true" value="<?php echo $post[0]['post_titulo']; ?>" class="fw-form-group title"/>

            <label for="descricao" class="fw-form-group">Descrição</label>
            <textarea id="descricao" name="descricao" class="fw-form-group fw-form-group-area" rows="5"><?php echo $post[0]['post_descricao']; ?></textarea>

            <div>
                <label for="image" class="fw-form-group">Imagem</label>
                <img id="view-image" src="<?php echo $settings['url_base'];?>/assets/img/<?php echo $post[0]['post_image'];?>" height="60"/>
                <input type="file" name="image" id="image" class="fw-form-group" value="<?php echo $settings['url_base']; ?>/assets/img/<?php echo $post[0]['post_image']; ?>"/>
            </div>
            <label for="categoria" class="fw-form-group">Categoria</label>
            <select id="categoria" name="categoria" required="true" class="fw-form-group fw-form-group-select">
                <option value="" disabled="true">Escolha uma categoria</option>
                <?php foreach ($categorias as $key => $value) : ?>
                    <option value="<?php echo $value['cat_id']; ?>" <?php echo ($post[0]['cat_id'] == $value['cat_id']) ? 'selected' : ''; ?>>
                        <?php echo $value['cat_name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="post" class="fw-form-group">Conteúdo do post</label>
            <textarea id="post" name="post" class="fw-form-group"><?php echo $post[0]['post_post']; ?></textarea><br/>
            <input type="submit" name="enviar" value="Salvar alterações" class="fw-btn fw-btn-success"/>
        </form>
    </div>
</div>