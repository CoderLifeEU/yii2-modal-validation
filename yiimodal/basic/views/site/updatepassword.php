<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\gbUser $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="gb-user-form">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'update-password-form']]); ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255], ['class' => 'input-modal']) ?>
    
    <?= $form->field($model, 'confirmpassword')->passwordInput(['maxlength' => 255], ['class' => 'input-modal']) ?>
    
    <?= Html::activeHiddenInput($model, 'id') ?>


    <div class="form-group text-right">
        <?= Html::submitButton('Update', ['class' => 'btn btn-success btn-update-password']) ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
