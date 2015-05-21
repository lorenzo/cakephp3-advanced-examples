<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Departments Manager'), ['action' => 'edit', $departmentsManager->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departments Manager'), ['action' => 'delete', $departmentsManager->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsManager->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departments Manager'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="departmentsManagers view large-10 medium-9 columns">
    <h2><?= h($departmentsManager->employee_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Department Id') ?></h6>
            <p><?= h($departmentsManager->department_id) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Employee Id') ?></h6>
            <p><?= $this->Number->format($departmentsManager->employee_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From Date') ?></h6>
            <p><?= h($departmentsManager->from_date) ?></p>
            <h6 class="subheader"><?= __('To Date') ?></h6>
            <p><?= h($departmentsManager->to_date) ?></p>
        </div>
    </div>
</div>
