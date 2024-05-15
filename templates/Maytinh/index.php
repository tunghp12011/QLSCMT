<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Maytinh> $maytinh
 */
?>
<div class="maytinh index content">
    <?= $this->Html->link(__('New Maytinh'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Maytinh') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nhan_hang') ?></th>
                    <th><?= $this->Paginator->sort('mau_ma') ?></th>
                    <th><?= $this->Paginator->sort('so_serial') ?></th>
                    <th><?= $this->Paginator->sort('ngay_mua') ?></th>
                    <th><?= $this->Paginator->sort('ngay_het_han_bao_hanh') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maytinh as $maytinh): ?>
                <tr>
                    <td><?= $this->Number->format($maytinh->id) ?></td>
                    <td><?= h($maytinh->nhan_hang) ?></td>
                    <td><?= h($maytinh->mau_ma) ?></td>
                    <td><?= h($maytinh->so_serial) ?></td>
                    <td><?= h($maytinh->ngay_mua) ?></td>
                    <td><?= h($maytinh->ngay_het_han_bao_hanh) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $maytinh->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maytinh->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maytinh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maytinh->id)]) ?>
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
