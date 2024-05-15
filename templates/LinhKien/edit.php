<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinhKien $linhKien
 * @var string[]|\Cake\Collection\CollectionInterface $suaChua
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $linhKien->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $linhKien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Linh Kien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="linhKien form content">
            <?= $this->Form->create($linhKien) ?>
            <fieldset>
                <legend><?= __('Edit Linh Kien') ?></legend>
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
