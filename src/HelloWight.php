<?php

namespace lnn\hellowidget;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWight extends Widget
{
    public $message;

    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'hello world';
        }
    }

    public function run() {
        return HTML::encode($this->message);
    }

}