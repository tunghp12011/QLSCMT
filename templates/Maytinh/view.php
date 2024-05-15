<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maytinh $maytinh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Maytinh'), ['action' => 'edit', $maytinh->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Maytinh'), ['action' => 'delete', $maytinh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maytinh->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Maytinh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Maytinh'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maytinh view content">
            <h3><?= h($maytinh->nhan_hang) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nhan Hang') ?></th>
                    <td><?= h($maytinh->nhan_hang) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mau Ma') ?></th>
                    <td><?= h($maytinh->mau_ma) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Serial') ?></th>
                    <td><?= h($maytinh->so_serial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($maytinh->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngay Mua') ?></th>
                    <td><?= h($maytinh->ngay_mua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngay Het Han Bao Hanh') ?></th>
                    <td><?= h($maytinh->ngay_het_han_bao_hanh) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mo Ta') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($maytinh->mo_ta)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
