<?php
namespace App\Model\Table;

use App\Model\Entity\Salary;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salaries Model
 */
class SalariesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('salaries');
        $this->primaryKey(['employee_id', 'from_date']);
        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('salary', 'valid', ['rule' => 'numeric'])
            ->requirePresence('salary', 'create')
            ->notEmpty('salary');

        $validator
            ->add('from_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('from_date', 'create');

        $validator
            ->add('to_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('to_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        return $rules;
    }

    public function findAverage(Query $query, $options = [])
    {
        return $query->select(['average' => $query->func()->avg('Salaries.salary')]);
    }

    public function findOfHired(Query $query, $options = [])
    {
        return $query->contain(['Employees'])->where(['Salaries.to_date IS' => null]);
    }

    public function findAveragePerGender(Query $query, $options = [])
    {
        return $query
            ->select(['gender' => 'Employees.gender'])
            ->find('average')
            ->contain(['Employees'])
            ->group(['Employees.gender']);
    }

    public function findMax(Query $query, $options = [])
    {
        return $query->select(['max' => $query->func()->max('Salaries.salary')]);
    }

    public function findAveragePerDepartment(Query $query, $options = [])
    {
         return $query
            ->select(['department' => 'Departments.name'])
            ->find('average')
            ->matching('Employees.Departments')
            ->where([
                'Salaries.from_date >= DepartmentsEmployees.from_date',
                'Salaries.from_date < DepartmentsEmployees.to_date'
            ])
            ->group(['Departments.id']);
    }

    public function findAveragePerYear(Query $query, $options = [])
    {
        $year = $query->func()->year(['Salaries.from_date' => 'literal']);
        return $query
            ->select(['year' => $year])
            ->find('average')
            ->group([$year]);
    }


}
