<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Manager'), ['action' => 'edit', $manager->department_id,  $manager->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manager'), ['action' => 'delete',  $manager->department_id,  $manager->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->department_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="managers view large-10 medium-9 columns">
    <h2><?= h($manager->department->name) ?> Manager</h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Department') ?></h6>
            <p><?= $manager->has('department') ? $this->Html->link($manager->department->name, ['controller' => 'Departments', 'action' => 'view', $manager->department->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Employee') ?></h6>
            <p><?= $manager->has('employee') ? $this->Html->link($manager->employee->full_name, ['controller' => 'Employees', 'action' => 'view', $manager->employee->id]) : '' ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From Date') ?></h6>
            <p><?= h($manager->from_date) ?></p>
            <h6 class="subheader"><?= __('To Date') ?></h6>
            <p><?= h($manager->to_date) ?></p>
        </div>
    </div>
</div>
