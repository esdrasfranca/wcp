<?php
global $settings;
?>
<div id="content">
    <h1>Novo Post</h1>

    <form method="post">
        <table>
            <tr>
                <td><label for="titulo">Título do post</label></td>
                <td><input type="text" id="titulo" name="titulo" required="true" value="<?php echo $post[0]['post_titulo']; ?>"/></td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição</label></td>
                <td><input type="text" id="descricao" name="descricao" value="<?php echo $post[0]['post_descricao']; ?>"/></td>
            </tr>
            <tr>
                <td><label for="categoria">Categoria</label></td>
                <td>
                    <select id="categoria" name="categoria" required="true">
                        <option value="" disabled="true">Escolha uma categoria</option>
                        <?php foreach ($categorias as $key => $value) : ?>
                            <option value="<?php echo $value['cat_id']; ?>" <?php echo ($post[0]['cat_id'] == $value['cat_id']) ? 'selected' : ''; ?>>
                                <?php echo $value['cat_name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
        <textarea id="post" name="post"><?php echo $post[0]['post_post']; ?></textarea>
        <input type="submit" name="enviar" value="Salvar alterações"/>
    </form>
</div>