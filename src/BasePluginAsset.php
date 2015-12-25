<?php
/**
 * @copyright Copyright (C) 2015 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-flot/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\flot;

use yii\web\AssetBundle;

abstract class BasePluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/flot';
    public $depends = [
        'jp3cki\yii2\flot\FlotAsset'
    ];
}
