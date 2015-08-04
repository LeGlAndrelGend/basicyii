<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2015
 * Time: 11:38
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'name')->label('Your name')?>

    <?=$form->field($model, 'email')->label('Your email')?>

    <div class="form-group">
        <?=Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>