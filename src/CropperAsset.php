<?php

namespace bilginnet\cropper;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Ian Schneider <ian.schneider@n.roteskreuz.at>
 */
class CropperAsset extends AssetBundle
{
    public $sourcePath = '@bilginnet/cropper/assets';
    public $jsOptions = ['position' => View::POS_END];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}