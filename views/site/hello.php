<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <b>Hello my dear friend <?= Html::encode($name)?>!</b>
       <i>P.S. A love my Lili*** She love me too!</i>
    </p>

    <code><?= __FILE__ ?></code>
</div>
