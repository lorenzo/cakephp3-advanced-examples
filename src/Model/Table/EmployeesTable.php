<?php
namespace App\Model\Table;

use App\Model\Entity\Employee;
use Cake\Database\Schema\Table as Schema;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 */
class EmployeesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->hasMany('Salaries', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Titles', [
            'foreignKey' => 'employee_id'
        ]);
        $this->belongsToMany('Departments', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'department_id',
            'joinTable' => 'departments_employees'
        ]);
    }

    protected function _initializeSchema(Schema $schema)
    {
        $schema->columnType('gender', 'gender');
        return $schema;
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('birth_date', 'valid', ['rule' => 'date'])
            ->requirePresence('birth_date', 'create')
            ->notEmpty('birth_date');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->add('hire_date', 'valid', ['rule' => 'date'])
            ->requirePresence('hire_date', 'create')
            ->notEmpty('hire_date');

        return $validator;
    }
}
