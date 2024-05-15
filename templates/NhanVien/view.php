<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $nhanVien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nhan Vien'), ['action' => 'edit', $nhanVien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nhan Vien'), ['action' => 'delete', $nhanVien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nhanVien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Nhan Vien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nhan Vien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nhanVien view content">
            <h3><?= h($nhanVien->ten_nv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ten Nv') ?></th>
                    <td><?= h($nhanVien->ten_nv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($nhanVien->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Dt') ?></th>
                    <td><?= h($nhanVien->so_dt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($nhanVien->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Dia Chi') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($nhanVien->dia_chi)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
