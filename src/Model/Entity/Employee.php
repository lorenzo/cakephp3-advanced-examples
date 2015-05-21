<?php
namespace App\Model\Entity;

use App\Model\Value\Gender;
use Cake\ORM\Entity;

/**
 * Employee Entity.
 */
class Employee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'birth_date' => true,
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'hire_date' => true,
        'departments_managers' => true,
        'salaries' => true,
        'titles' => true,
        'departments' => true,
    ];

    /**
     * Fields that are no exposed to the world when serializing
     *
     * @var array
     */
    protected $_hidden = [
        'id',
    ];

    protected $_virtual = [
        'full_name'
    ];

    protected function _getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    protected function _setGender($gender)
    {
        return Gender::get($gender);
    }
}
