<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhachHang $khachHang
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Khach Hang'), ['action' => 'edit', $khachHang->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Khach Hang'), ['action' => 'delete', $khachHang->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khachHang->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Khach Hang'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Khach Hang'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachHang view content">
            <h3><?= h($khachHang->ten_KH) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ten KH') ?></th>
                    <td><?= h($khachHang->ten_KH) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($khachHang->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Dt') ?></th>
                    <td><?= h($khachHang->so_dt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khachHang->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Dia Chi') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($khachHang->dia_chi)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
