<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DepartmentsManager Entity.
 */
class DepartmentsManager extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'from_date' => true,
        'to_date' => true,
        'department' => true,
        'employee' => true,
    ];
}
