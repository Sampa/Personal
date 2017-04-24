<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = Yii::t('app', 'Create Article');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container ">
    <div class="col-sm-8  col-sm-push-2 box">
        <hr>
        <h2 class="intro-text text-center"><?= Html::encode($this->title) ?></h2>
        <hr>

        <?= $this->render('_form', ['model' => $model]) ?>

    </div>
</div>
