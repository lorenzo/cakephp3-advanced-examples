<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity.
 */
class Department extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'employees' => true,
    ];

    /**
     * Fields that are no exposed to the wolrd when serializing
     *
     * @var array
     */
    protected $_hidden = [
        'id',
    ];
}
