<?php
/**
 * Copyright (c) 29/8/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

namespace Collected\Handlers;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class User
 * @package Collected\Handlers
 */
class User
{
    /**
     * @param array $arFields
     */
    public static function beforeAdd(&$arFields)
    {

    }

    /**
     * @param array $arFields
     */
    public static function beforeUpdate(&$arFields)
    {

    }

    /**
     * @param int $id
     */
    public static function beforeDelete($id)
    {

    }

    /**
     * @param int $id
     * @param array $arFields
     */
    public static function afterAdd($id, $arFields)
    {

    }

    /**
     * @param int $id
     * @param array $arFields
     */
    public static function afterUpdate($id, $arFields)
    {

    }

    /**
     * @param int $id
     */
    public static function afterDelete($id)
    {

    }
}