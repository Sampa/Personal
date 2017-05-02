<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('bower', dirname(dirname(__DIR__)) . '/vendor/asset');
Yii::setAlias('sampa', dirname(dirname(__DIR__)) . '/vendor/sampa');
Yii::setAlias('appRoot', '/'.basename(dirname(dirname(dirname(__DIR__)))));
Yii::setAlias('app', '/'.basename(dirname(dirname(dirname(__DIR__)))));

