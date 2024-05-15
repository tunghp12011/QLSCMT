<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\KhachHang> $khachHang
 */
?>
<div class="khachHang index content">
    <?= $this->Html->link(__('New Khach Hang'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Khach Hang') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ten_KH') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('so_dt') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khachHang as $khachHang): ?>
                <tr>
                    <td><?= $this->Number->format($khachHang->id) ?></td>
                    <td><?= h($khachHang->ten_KH) ?></td>
                    <td><?= h($khachHang->email) ?></td>
                    <td><?= h($khachHang->so_dt) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $khachHang->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khachHang->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khachHang->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khachHang->id)]) ?>
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
