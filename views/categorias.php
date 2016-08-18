<?php
global $settings;
?>

<div class="content">

    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header"><h1>Categorias</h1></div>

        <div class="fw-panel">
            <form method="POST">
                <label for="nova-cat" class="fw-form-group">Nova categoria</label>
                <input type="text" id="nova-cat" name="nova-cat" class="fw-form-group"/>
                <input type="submit" value="Salvar nova categoria" name="salvar" class="fw-btn fw-btn-success"/>
            </form>
        </div>

        <table class="fw-table fw-table-border">
            <thead>
                <tr>
                    <th>Nome da categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?php echo $categoria['cat_name']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>
