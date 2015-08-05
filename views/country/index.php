<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.08.2015
 * Time: 9:12
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Hello countries!</h1>

<ul>
    <?php foreach($countries as $country): ?>

        <li>
            <?= Html::encode("{$country->name} ({$country->code}) ") ?>:
            <?= $country->population ?>
        </li>

    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]); ?>