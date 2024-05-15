<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LinhKien> $linhKien
 */
?>
<div class="linhKien index content">
    <?= $this->Html->link(__('New Linh Kien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Linh Kien') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ten_linh_kien') ?></th>
                    <th><?= $this->Paginator->sort('so_luong') ?></th>
                    <th><?= $this->Paginator->sort('gia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($linhKien as $linhKien): ?>
                <tr>
                    <td><?= $this->Number->format($linhKien->id) ?></td>
                    <td><?= h($linhKien->ten_linh_kien) ?></td>
                    <td><?= $linhKien->so_luong === null ? '' : $this->Number->format($linhKien->so_luong) ?></td>
                    <td><?= $linhKien->gia === null ? '' : $this->Number->format($linhKien->gia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $linhKien->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $linhKien->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $linhKien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linhKien->id)]) ?>
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
