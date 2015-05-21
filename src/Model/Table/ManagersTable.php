<?php
namespace App\Model\Table;

use App\Model\Entity\Employee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Managers Model
 */
class ManagersTable extends Table
{

    public function initialize(array $config = [])
    {
        $this->table('departments_managers');
        $this->primaryKey(['department_id', 'employee_id']);

        $this->belongsTo('Employees', ['joinType' => 'INNER']);
        $this->belongsTo('Departments', ['joinType' => 'INNER']);
    }

    public function beforeFind($event, $query, $options)
    {
        $query->andWhere(['to_date IS' => NULL]);
    }

    public function findFemale(Query $query, $options = [])
    {
        return $query->contain(['Employees'])->where(['Employees.gender' => 'F']);
    }

    public function findFemaleRatio(Query $query, $options = [])
    {
        $allManagers = $this->find()->select($query->func()->count('*'));
        return $query
            ->find('female')
            ->select([
                'female_ratio' => $query->newExpr($query->func()->count('*'))->add($allManagers)->type('/')
            ]);
    }

}
