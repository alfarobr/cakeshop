<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar Producto</h2>
        </div>
        <?= $this->Form->create($product, ['type' => 'file']) ?>
        <fieldset>
            
            <?= $this->element('Products/fields') ?>
            
        </fieldset>
        <?= $this->Form->button('Editar Producto') ?>
        <?= $this->Form->end() ?>
    </div>
</div>