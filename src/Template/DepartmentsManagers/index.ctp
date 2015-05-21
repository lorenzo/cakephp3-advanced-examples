<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Departments Manager'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="departmentsManagers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('department_id') ?></th>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('from_date') ?></th>
            <th><?= $this->Paginator->sort('to_date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($departmentsManagers as $departmentsManager): ?>
        <tr>
            <td><?= h($departmentsManager->department_id) ?></td>
            <td><?= $this->Number->format($departmentsManager->employee_id) ?></td>
            <td><?= h($departmentsManager->from_date) ?></td>
            <td><?= h($departmentsManager->to_date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $departmentsManager->employee_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departmentsManager->employee_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departmentsManager->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsManager->employee_id)]) ?>
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
