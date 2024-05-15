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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $suaChuaLinhKien->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $suaChuaLinhKien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sua Chua Linh Kien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suaChuaLinhKien form content">
            <?= $this->Form->create($suaChuaLinhKien) ?>
            <fieldset>
                <legend><?= __('Edit Sua Chua Linh Kien') ?></legend>
                <?php
                    echo $this->Form->control('id_sua_chua');
                    echo $this->Form->control('id_linh_kien');
                    echo $this->Form->control('so_luong');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
