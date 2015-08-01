<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <b>Hello my dear friend!</b>
       <i>P.S. A love my Lili***</i>
    </p>

    <code><?= __FILE__ ?></code>
</div>
