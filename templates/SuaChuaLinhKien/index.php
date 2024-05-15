<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SuaChuaLinhKien> $suaChuaLinhKien
 */
?>
<div class="suaChuaLinhKien index content">
    <?= $this->Html->link(__('New Sua Chua Linh Kien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sua Chua Linh Kien') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_sua_chua') ?></th>
                    <th><?= $this->Paginator->sort('id_linh_kien') ?></th>
                    <th><?= $this->Paginator->sort('so_luong') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suaChuaLinhKien as $suaChuaLinhKien): ?>
                <tr>
                    <td><?= $this->Number->format($suaChuaLinhKien->id) ?></td>
                    <td><?= $suaChuaLinhKien->id_sua_chua === null ? '' : $this->Number->format($suaChuaLinhKien->id_sua_chua) ?></td>
                    <td><?= $suaChuaLinhKien->id_linh_kien === null ? '' : $this->Number->format($suaChuaLinhKien->id_linh_kien) ?></td>
                    <td><?= $suaChuaLinhKien->so_luong === null ? '' : $this->Number->format($suaChuaLinhKien->so_luong) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $suaChuaLinhKien->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suaChuaLinhKien->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suaChuaLinhKien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suaChuaLinhKien->id)]) ?>
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
