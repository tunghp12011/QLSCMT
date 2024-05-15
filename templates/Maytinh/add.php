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
            <?= $this->Html->link(__('List Maytinh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maytinh form content">
            <?= $this->Form->create($maytinh) ?>
            <fieldset>
                <legend><?= __('Add Maytinh') ?></legend>
                <?php
                    echo $this->Form->control('nhan_hang');
                    echo $this->Form->control('mau_ma');
                    echo $this->Form->control('so_serial');
                    echo $this->Form->control('mo_ta');
                    echo $this->Form->control('ngay_mua', ['empty' => true]);
                    echo $this->Form->control('ngay_het_han_bao_hanh', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
