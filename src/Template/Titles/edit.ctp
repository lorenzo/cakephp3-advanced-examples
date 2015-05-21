<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $title->employee_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $title->employee_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Titles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="titles form large-10 medium-9 columns">
    <?= $this->Form->create($title); ?>
    <fieldset>
        <legend><?= __('Edit Title') ?></legend>
        <?php
            echo $this->Form->input('to_date', array('empty' => true, 'default' => ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
