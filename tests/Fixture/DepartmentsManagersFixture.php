<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartmentsManagersFixture
 *
 */
class DepartmentsManagersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'department_id' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'employee_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'from_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'to_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'emp_no' => ['type' => 'index', 'columns' => ['employee_id'], 'length' => []],
            'dept_no' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['employee_id', 'department_id'], 'length' => []],
            'departments_managers_ibfk_1' => ['type' => 'foreign', 'columns' => ['employee_id'], 'references' => ['employees', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'departments_managers_ibfk_2' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'department_id' => '5749dda4-a56e-445c-9d3b-a45be5f5ca13',
            'employee_id' => 1,
            'from_date' => '2015-05-17',
            'to_date' => '2015-05-17'
        ],
    ];
}
