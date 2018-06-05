<?php

namespace WebArch\BitrixUserPropertyType\Abstraction;

use CUserTypeInteger;

trait IntegerDbColTypeTrait
{
    /**
     * @param array $userField
     *
     * @return string
     *
     * @see UserTypeInterface::getDBColumnType
     */
    public static function getDBColumnType($userField)
    {
        /** @noinspection PhpDynamicAsStaticMethodCallInspection */
        return CUserTypeInteger::GetDBColumnType($userField);
    }
}
