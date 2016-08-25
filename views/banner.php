<?php
global $settings;
?>
<div class="content">
    <div class="content-bar"></div>
    <div class="content-body">
        <div class="content-header">
            <h1>Banner</h1>
        </div>

        <div class="content-menu">
            <a class="fw-btn fw-btn-primary" href="<?php echo $settings['url']?>/banner/novo">Add banner</a>
        </div>

        <table class="fw-table fw-table-border">
            <thead>
            <tr>
                <th>Ordem</th>
                <th>Banner</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>
            <?php if (!isset($banners) || count($banners) == 0): ?>
            <tr>
                <td colspan="3">Nenhum item encontrado</td>
            </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>