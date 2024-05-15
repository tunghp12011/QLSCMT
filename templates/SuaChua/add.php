<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuaChua $suaChua
 * @var \Cake\Collection\CollectionInterface|string[] $linhKien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sua Chua'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suaChua form content">
            <?= $this->Form->create($suaChua) ?>
            <fieldset>
                <legend><?= __('Add Sua Chua') ?></legend>
                <?php
                    echo $this->Form->control('id_mayTinh');
                    echo $this->Form->control('ngay_bat_dau', ['empty' => true]);
                    echo $this->Form->control('ngay_ket_thuc', ['empty' => true]);
                    echo $this->Form->control('chi_phi');
                    echo $this->Form->control('id_nhanVien');
                    echo $this->Form->control('linh_kien._ids', ['options' => $linhKien]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
