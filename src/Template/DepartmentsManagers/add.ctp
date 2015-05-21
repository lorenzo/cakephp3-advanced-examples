<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Departments Managers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="departmentsManagers form large-10 medium-9 columns">
    <?= $this->Form->create($departmentsManager); ?>
    <fieldset>
        <legend><?= __('Add Departments Manager') ?></legend>
        <?php
            echo $this->Form->input('from_date');
            echo $this->Form->input('to_date', array('empty' => true, 'default' => ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
