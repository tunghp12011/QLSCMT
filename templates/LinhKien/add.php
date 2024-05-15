<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinhKien $linhKien
 * @var \Cake\Collection\CollectionInterface|string[] $suaChua
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Linh Kien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="linhKien form content">
            <?= $this->Form->create($linhKien) ?>
            <fieldset>
                <legend><?= __('Add Linh Kien') ?></legend>
                <?php
                    echo $this->Form->control('ten_linh_kien');
                    echo $this->Form->control('mo_ta');
                    echo $this->Form->control('so_luong');
                    echo $this->Form->control('gia');
                    echo $this->Form->control('sua_chua._ids', ['options' => $suaChua]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
