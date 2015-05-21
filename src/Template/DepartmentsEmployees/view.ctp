<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Departments Employee'), ['action' => 'edit', $departmentsEmployee->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departments Employee'), ['action' => 'delete', $departmentsEmployee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsEmployee->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departments Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="departmentsEmployees view large-10 medium-9 columns">
    <h2><?= h($departmentsEmployee->employee_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Employee') ?></h6>
            <p><?= $departmentsEmployee->has('employee') ? $this->Html->link($departmentsEmployee->employee->id, ['controller' => 'Employees', 'action' => 'view', $departmentsEmployee->employee->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Department') ?></h6>
            <p><?= $departmentsEmployee->has('department') ? $this->Html->link($departmentsEmployee->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsEmployee->department->id]) : '' ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From Date') ?></h6>
            <p><?= h($departmentsEmployee->from_date) ?></p>
            <h6 class="subheader"><?= __('To Date') ?></h6>
            <p><?= h($departmentsEmployee->to_date) ?></p>
        </div>
    </div>
</div>
