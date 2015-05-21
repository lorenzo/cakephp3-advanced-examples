<?php
namespace App\Model\Value;

use JsonSerializable;

/**
 *
 */
class Gender implements JsonSerializable
{

    private static $genders = [];

    protected $short;

    protected $name;

    protected function __construct($gender)
    {
        $this->short = $gender;
        $this->name = $gender === 'F' ? 'Female' : 'Male';
    }

    public function short()
    {
        return $this->short;
    }

    public static function get($gender)
    {
        if ($gender instanceof self) {
            return $gender;
        }

        if (in_array($gender, ['f', 'F', 'Female'], true)) {
            return static::$genders['F'] = isset(static::$genders['F']) ?
                static::$genders['F'] :
                new static('F');
        }

        if (in_array($gender, ['m', 'M', 'Male'], true)) {
            return static::$genders['M'] = isset(static::$genders['M']) ?
                static::$genders['M'] :
                new static('M');
        }

        throw new \InvalidArgumentException('Invalid Gender');
    }

    public static function options()
    {
        return [
            ['value' => static::get('f'), 'text' => 'Female'],
            ['value' => static::get('m'), 'text' => 'Male']
        ];
    }

    public function __toString()
    {
        return $this->name;
    }

    public function jsonSerialize()
    {
        return $this->short;
    }

    public function __debugInfo()
    {
        return ['value' => $this->name];
    }
}
