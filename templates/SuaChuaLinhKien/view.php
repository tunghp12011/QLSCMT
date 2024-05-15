<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuaChuaLinhKien $suaChuaLinhKien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sua Chua Linh Kien'), ['action' => 'edit', $suaChuaLinhKien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sua Chua Linh Kien'), ['action' => 'delete', $suaChuaLinhKien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suaChuaLinhKien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sua Chua Linh Kien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sua Chua Linh Kien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suaChuaLinhKien view content">
            <h3><?= h($suaChuaLinhKien->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($suaChuaLinhKien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Sua Chua') ?></th>
                    <td><?= $suaChuaLinhKien->id_sua_chua === null ? '' : $this->Number->format($suaChuaLinhKien->id_sua_chua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Linh Kien') ?></th>
                    <td><?= $suaChuaLinhKien->id_linh_kien === null ? '' : $this->Number->format($suaChuaLinhKien->id_linh_kien) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Luong') ?></th>
                    <td><?= $suaChuaLinhKien->so_luong === null ? '' : $this->Number->format($suaChuaLinhKien->so_luong) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
