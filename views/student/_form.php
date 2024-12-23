<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="card shadow-sm col-8 mt-2">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Student</h5>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'faculty')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'specialization')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'group')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'year')->textInput(['class' => 'form-control form-control-sm']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <?= Html::a('Înapoi', ['index'], ['class' => 'btn btn-secondary btn-sm']) ?>
        <?= Html::submitButton('Salvează', ['class' => 'btn btn-success btn-sm']) ?>
    </div>
</div>