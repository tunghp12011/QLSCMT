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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $khachHang->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $khachHang->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Khach Hang'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachHang form content">
            <?= $this->Form->create($khachHang) ?>
            <fieldset>
                <legend><?= __('Edit Khach Hang') ?></legend>
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
