<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Departments Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="departmentsEmployees index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('department_id') ?></th>
            <th><?= $this->Paginator->sort('from_date') ?></th>
            <th><?= $this->Paginator->sort('to_date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($departmentsEmployees as $departmentsEmployee): ?>
        <tr>
            <td>
                <?= $departmentsEmployee->has('employee') ? $this->Html->link($departmentsEmployee->employee->id, ['controller' => 'Employees', 'action' => 'view', $departmentsEmployee->employee->id]) : '' ?>
            </td>
            <td>
                <?= $departmentsEmployee->has('department') ? $this->Html->link($departmentsEmployee->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsEmployee->department->id]) : '' ?>
            </td>
            <td><?= h($departmentsEmployee->from_date) ?></td>
            <td><?= h($departmentsEmployee->to_date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $departmentsEmployee->employee_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departmentsEmployee->employee_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departmentsEmployee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsEmployee->employee_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
