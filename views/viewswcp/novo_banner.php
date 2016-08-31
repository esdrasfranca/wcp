<?php global $settings;?>

<div class="content">
    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Novo Banner</h1>
        </div>

        <form action="<?php echo $settings['url_wcp']?>/banner" class="fw-form" method="post" enctype="multipart/form-data">
            <label for="position" class="fw-form-group">Ordem de exibição do banner</label>
            <input type="number" min="1" value="1" name="position" id="position" class="fw-form-group" style="width: 50%;" required/>

            <label for="file" class="form-group">Selecione a imagem do banner</label>
            <br/>
            <br/>
            <input type="file" name="file" id="image" class="fw-form-group"/>

            <div style="height: 60px; border: 1px dashed #ccc;">
                <img id="view-image" src="" height="60" />
            </div>
            <br/>
            <input type="submit" value="Salvar" name="salvar" class="fw-btn fw-btn-success"/>
            <a href="<?php echo $settings['url_wcp'];?>/banner" class="fw-link fw-link-danger">Cancelar</a>
        </form>

    </div>
</div>