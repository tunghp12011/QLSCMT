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
            <?= $this->Html->link(__('List Khach Hang'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachHang form content">
            <?= $this->Form->create($khachHang) ?>
            <fieldset>
                <legend><?= __('Add Khach Hang') ?></legend>
                <?php
                    echo $this->Form->control('ten_KH');
                    echo $this->Form->control('email');
                    echo $this->Form->control('so_dt');
                    echo $this->Form->control('dia_chi');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
