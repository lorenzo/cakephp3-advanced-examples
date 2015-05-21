<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Title'), ['action' => 'edit', $title->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Title'), ['action' => 'delete', $title->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $title->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Titles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Title'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="titles view large-10 medium-9 columns">
    <h2><?= h($title->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Employee') ?></h6>
            <p><?= $title->has('employee') ? $this->Html->link($title->employee->id, ['controller' => 'Employees', 'action' => 'view', $title->employee->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($title->title) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From Date') ?></h6>
            <p><?= h($title->from_date) ?></p>
            <h6 class="subheader"><?= __('To Date') ?></h6>
            <p><?= h($title->to_date) ?></p>
        </div>
    </div>
</div>
