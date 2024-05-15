<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinhKien $linhKien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Linh Kien'), ['action' => 'edit', $linhKien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Linh Kien'), ['action' => 'delete', $linhKien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linhKien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Linh Kien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Linh Kien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="linhKien view content">
            <h3><?= h($linhKien->ten_linh_kien) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ten Linh Kien') ?></th>
                    <td><?= h($linhKien->ten_linh_kien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($linhKien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Luong') ?></th>
                    <td><?= $linhKien->so_luong === null ? '' : $this->Number->format($linhKien->so_luong) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gia') ?></th>
                    <td><?= $linhKien->gia === null ? '' : $this->Number->format($linhKien->gia) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mo Ta') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($linhKien->mo_ta)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Sua Chua') ?></h4>
                <?php if (!empty($linhKien->sua_chua)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Id MayTinh') ?></th>
                            <th><?= __('Ngay Bat Dau') ?></th>
                            <th><?= __('Ngay Ket Thuc') ?></th>
                            <th><?= __('Chi Phi') ?></th>
                            <th><?= __('Id NhanVien') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($linhKien->sua_chua as $suaChua) : ?>
                        <tr>
                            <td><?= h($suaChua->id) ?></td>
                            <td><?= h($suaChua->id_mayTinh) ?></td>
                            <td><?= h($suaChua->ngay_bat_dau) ?></td>
                            <td><?= h($suaChua->ngay_ket_thuc) ?></td>
                            <td><?= h($suaChua->chi_phi) ?></td>
                            <td><?= h($suaChua->id_nhanVien) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SuaChua', 'action' => 'view', $suaChua->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SuaChua', 'action' => 'edit', $suaChua->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuaChua', 'action' => 'delete', $suaChua->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suaChua->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
