<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Button extends Widget
{
    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return Html::encode('this is button');
    }
}