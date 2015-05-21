<?php
namespace App\Model\Database\Type;

use App\Model\Value\Gender;
use Cake\Database\Driver;
use Cake\Database\Type;

/**
 * Gender Type
 */
class GenderType extends Type
{

    public function toPHP($value, Driver $driver)
    {
		if ($value === null) {
            return $value;
        }
        return Gender::get($value);
    }

    public function marshal($value)
    {
        if ($value === null) {
            return $value;
        }
        return Gender::get($value);
    }

    public function toDatabase($value, Driver $driver)
    {
		if (is_string($value)) {
			return $value;
		}
        return $value->short();
    }

    public function toStatement($value, Driver $driver)
    {
        if ($value === null) {
            return \PDO::PARAM_NULL;
        }
        return \PDO::PARAM_STR;
    }
}
