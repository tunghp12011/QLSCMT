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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nhanVien->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nhanVien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Nhan Vien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nhanVien form content">
            <?= $this->Form->create($nhanVien) ?>
            <fieldset>
                <legend><?= __('Edit Nhan Vien') ?></legend>
                <?php
                    echo $this->Form->control('ten_nv');
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
