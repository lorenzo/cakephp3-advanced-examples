<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DepartmentsManager Entity.
 */
class Manager extends Entity
{

    /**
     * Fields that are no exposed to the wolrd when serializing
     *
     * @var array
     */
    protected $_hidden = [
        'employee_id',
        'department_id',
    ];
}
