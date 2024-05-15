<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $nhanVien
 */
?>
<div class="nhanVien index content">
    <?= $this->Html->link(__('New Nhan Vien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nhan Vien') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ten_nv') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('so_dt') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nhanVien as $nhanVien): ?>
                <tr>
                    <td><?= $this->Number->format($nhanVien->id) ?></td>
                    <td><?= h($nhanVien->ten_nv) ?></td>
                    <td><?= h($nhanVien->email) ?></td>
                    <td><?= h($nhanVien->so_dt) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nhanVien->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nhanVien->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nhanVien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nhanVien->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
