<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Title Entity.
 */
class Title extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'to_date' => true,
        'employee' => true,
    ];
}
