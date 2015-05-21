<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="managers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('department_id') ?></th>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('from_date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($managers as $manager): ?>
        <tr>
            <td>
                <?= $manager->has('department') ? $this->Html->link($manager->department->name, ['controller' => 'Departments', 'action' => 'view', $manager->department->id]) : '' ?>
            </td>
            <td>
                <?= $manager->has('employee') ? $this->Html->link($manager->employee->full_name, ['controller' => 'Employees', 'action' => 'view', $manager->employee->id]) : '' ?>
            </td>
            <td><?= h($manager->from_date->format('Y-m-d')) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $manager->department_id, $manager->employee_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $manager->department_id, $manager->employee_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $manager->department_id, $manager->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->department_id)]) ?>
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
