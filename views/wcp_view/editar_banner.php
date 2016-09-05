<?php global $settings; ?>

<div class="content">
    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Editar Banner</h1>
        </div>

        <form action="<?php echo $settings['url_wcp'] ?>/banner" class="fw-form" method="post"
              enctype="multipart/form-data">

            <input type="hidden" name="id_banner" value="<?php echo $banner[0]['ban_id']?>"/>

            <label for="position" class="fw-form-group">Ordem de exibição do banner</label>
            <input type="number" min="1" value="<?php echo $banner[0]['ban_position']; ?>" name="position" id="position"
                   class="fw-form-group" style="width: 50%;" required="true"/>

            <label for="file" class="form-group">Selecione a imagem do banner</label>
            <div>
                <img id="view-image"
                     src="<?php echo $settings['url_base']; ?>/upload/<?php echo $banner[0]['ban_image']; ?>" height="60"/>
                <input type="file" name="file" id="image" class="fw-form-group"
                       value="<?php echo $settings['url_base']; ?> /assets/img/<?php echo $banner[0]['ban_image']; ?>"/>
            </div>
            <input type="submit" value="Atualizar" name="atualizar" class="fw-btn fw-btn-success"/>
            <a href="<?php echo $settings['url_wcp']; ?>/banner" class="fw-link fw-link-danger">Cancelar</a>
        </form>

    </div>
</div>