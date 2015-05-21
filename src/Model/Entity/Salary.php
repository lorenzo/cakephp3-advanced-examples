<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salary Entity.
 */
class Salary extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'salary' => true,
        'to_date' => true,
        'employee' => true,
    ];
}
