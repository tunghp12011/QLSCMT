<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuaChua $suaChua
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sua Chua'), ['action' => 'edit', $suaChua->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sua Chua'), ['action' => 'delete', $suaChua->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suaChua->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sua Chua'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sua Chua'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suaChua view content">
            <h3><?= h($suaChua->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($suaChua->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id MayTinh') ?></th>
                    <td><?= $suaChua->id_mayTinh === null ? '' : $this->Number->format($suaChua->id_mayTinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chi Phi') ?></th>
                    <td><?= $suaChua->chi_phi === null ? '' : $this->Number->format($suaChua->chi_phi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id NhanVien') ?></th>
                    <td><?= $suaChua->id_nhanVien === null ? '' : $this->Number->format($suaChua->id_nhanVien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngay Bat Dau') ?></th>
                    <td><?= h($suaChua->ngay_bat_dau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngay Ket Thuc') ?></th>
                    <td><?= h($suaChua->ngay_ket_thuc) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Linh Kien') ?></h4>
                <?php if (!empty($suaChua->linh_kien)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ten Linh Kien') ?></th>
                            <th><?= __('Mo Ta') ?></th>
                            <th><?= __('So Luong') ?></th>
                            <th><?= __('Gia') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($suaChua->linh_kien as $linhKien) : ?>
                        <tr>
                            <td><?= h($linhKien->id) ?></td>
                            <td><?= h($linhKien->ten_linh_kien) ?></td>
                            <td><?= h($linhKien->mo_ta) ?></td>
                            <td><?= h($linhKien->so_luong) ?></td>
                            <td><?= h($linhKien->gia) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LinhKien', 'action' => 'view', $linhKien->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LinhKien', 'action' => 'edit', $linhKien->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LinhKien', 'action' => 'delete', $linhKien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linhKien->id)]) ?>
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
