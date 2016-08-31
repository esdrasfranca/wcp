<div class="content" >

    <div class="content-bar"></div>

    <div class="content-body">
        <div class="content-header">
            <h1>Configurações</h1>
        </div>
        <form method="post" class="fw-form">

            <label for="url_site" class="fw-form-group">URL do site</label>
            <input type="url" name="url_site" required="true" class="fw-form-group" value="<?php echo $setting['url_site'];?>"/>
         
            <input type="submit" value="Salvar configurações" name="salvar" class="fw-btn fw-btn-success"/>
        </form>
    </div>
</div>