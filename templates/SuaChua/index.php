<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SuaChua> $suaChua
 */
?>
<div class="suaChua index content">
    <?= $this->Html->link(__('New Sua Chua'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sua Chua') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_mayTinh') ?></th>
                    <th><?= $this->Paginator->sort('ngay_bat_dau') ?></th>
                    <th><?= $this->Paginator->sort('ngay_ket_thuc') ?></th>
                    <th><?= $this->Paginator->sort('chi_phi') ?></th>
                    <th><?= $this->Paginator->sort('id_nhanVien') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suaChua as $suaChua): ?>
                <tr>
                    <td><?= $this->Number->format($suaChua->id) ?></td>
                    <td><?= $suaChua->id_mayTinh === null ? '' : $this->Number->format($suaChua->id_mayTinh) ?></td>
                    <td><?= h($suaChua->ngay_bat_dau) ?></td>
                    <td><?= h($suaChua->ngay_ket_thuc) ?></td>
                    <td><?= $suaChua->chi_phi === null ? '' : $this->Number->format($suaChua->chi_phi) ?></td>
                    <td><?= $suaChua->id_nhanVien === null ? '' : $this->Number->format($suaChua->id_nhanVien) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $suaChua->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suaChua->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suaChua->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suaChua->id)]) ?>
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
