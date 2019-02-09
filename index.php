<?php

$config = dirname(__FILE__) . '/protected/config/main.php';
require(__DIR__ . '/vendor/autoload.php');

class Yii extends YiiBase
{
    /**
     * @static
     * @return CApplication
     */
    public static function app()
    {
        return parent::app();
    }
}

Yii::createWebApplication($config)->run();
