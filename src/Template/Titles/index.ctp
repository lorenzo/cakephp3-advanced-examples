<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Title'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="titles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('from_date') ?></th>
            <th><?= $this->Paginator->sort('to_date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($titles as $title): ?>
        <tr>
            <td>
                <?= $title->has('employee') ? $this->Html->link($title->employee->id, ['controller' => 'Employees', 'action' => 'view', $title->employee->id]) : '' ?>
            </td>
            <td><?= h($title->title) ?></td>
            <td><?= h($title->from_date) ?></td>
            <td><?= h($title->to_date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $title->employee_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $title->employee_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $title->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $title->employee_id)]) ?>
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
