<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\invoice */
/* @var $form ActiveForm */
?>
<div class="invoice">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- invoice -->
