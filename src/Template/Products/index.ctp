
<div class="row">
    <div class="page-header">
        <h2>Productos <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'Products', 'action' => 'add'], ['class' => 'btn btn-small btn-primary pull-right', 'escape' => false]) ?></h2>
    </div>
    
    <?php foreach ($products as $product): ?>
    
    <div class="col-md-4">
        <section>
            <div class="well">
                <h3><?= h($product->name) ?></h3>
                <?= $this->Html->image('../files/products/photo/' . $product->get('photo_dir') . '/square_' . $product->get('photo'), ['alt' => $product->name, 'class' => 'img-responsive img-thumbnail center-block']); ?>
                <p>
                    <br>
                    <strong>Cantidad: </strong> <?= h($product->quantity) ?>
                    <br>
                    <strong>Precio: </strong> <?= h($product->price) ?>
                </p>
                <?= $this->Html->link('Ver', ['action' => 'view', $product->id], ['class' => 'btn btn-small btn-info']) ?>
                <?= $this->Html->link('Editar', ['action' => 'edit', $product->id], ['class' => 'btn btn-small btn-primary']) ?>
                <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $product->id], ['confirm' => 'Eliminar Producto?', 'class'=>'btn btn-small btn-danger']) ?>
            </div>
        </section>
    </div>
    
    <?php endforeach; ?>
    
</div>

<div class="row">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter('{{page}} de {{pages}}') ?></p>
    </div>
</div>