<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salaries'), ['controller' => 'Salaries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary'), ['controller' => 'Salaries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Titles'), ['controller' => 'Titles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Title'), ['controller' => 'Titles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="employees view large-10 medium-9 columns">
    <h2><?= h($employee->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($employee->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($employee->last_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($employee->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birth Date') ?></h6>
            <p><?= h($employee->birth_date) ?></p>
            <h6 class="subheader"><?= __('Hire Date') ?></h6>
            <p><?= h($employee->hire_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Gender') ?></h6>
            <?= $this->Text->autoParagraph(h($employee->gender)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Salaries') ?></h4>
    <?php if (!empty($employee->salaries)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Employee Id') ?></th>
            <th><?= __('Salary') ?></th>
            <th><?= __('From Date') ?></th>
            <th><?= __('To Date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($employee->salaries as $salaries): ?>
        <tr>
            <td><?= h($salaries->employee_id) ?></td>
            <td><?= h($salaries->salary) ?></td>
            <td><?= h($salaries->from_date) ?></td>
            <td><?= h($salaries->to_date) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Salaries', 'action' => 'view', $salaries->employee_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Salaries', 'action' => 'edit', $salaries->employee_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Salaries', 'action' => 'delete', $salaries->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaries->employee_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Titles') ?></h4>
    <?php if (!empty($employee->titles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Employee Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('From Date') ?></th>
            <th><?= __('To Date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($employee->titles as $titles): ?>
        <tr>
            <td><?= h($titles->employee_id) ?></td>
            <td><?= h($titles->title) ?></td>
            <td><?= h($titles->from_date) ?></td>
            <td><?= h($titles->to_date) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Titles', 'action' => 'view', $titles->employee_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Titles', 'action' => 'edit', $titles->employee_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Titles', 'action' => 'delete', $titles->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $titles->employee_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Departments') ?></h4>
    <?php if (!empty($employee->departments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($employee->departments as $departments): ?>
        <tr>
            <td><?= h($departments->id) ?></td>
            <td><?= h($departments->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
