<div class="content" style="width: 50%;">

    <div class="content-bar"></div>

    <div class="content-body">
        <div class="content-header">
            <h1>Configurações</h1>
        </div>
        <form method="post" class="fw-form">

            <label for="url_site" class="fw-form-group">URL do site</label>
            <input type="url" name="url_site" required="true" class="fw-form-group"/>
         
            <label for="dbhost" class="fw-form-group">Host do bando de dados</label>
            <input type="text" placeholder="" name="dbhost" required="true" class="fw-form-group"/>
         
            <label for="dbname" class="fw-form-group">Nome do banco de dados</label>
            <input type="text" placeholder="" name="dbname" required="true" class="fw-form-group"/>
          
            <label for="dbuser" class="fw-form-group">Usuário do bando de dados</label>
            <input type="text" placeholder="" name="dbuser" required="true" class="fw-form-group"/>
            
            <label for="dbdrive" class="fw-form-group">Driver do banco de dados</label>
            <select name="dbdrive" required id="dbdrive" class="fw-form-group fw-form-group-select">
                <option value="" disabled selected>Escolha o driver do banco</option>
                <option value="mysql" >MySQL</option>
            </select>
           
            <label for="dbpassw" class="fw-form-group">Senha do banco de dados</label>
            <input type="password" placeholder="" name="dbpassw" class="fw-form-group"/>
           
            <input type="submit" value="Salvar configurações" name="enviar" class="fw-btn fw-btn-success"/>
        </form>
    </div>
</div>