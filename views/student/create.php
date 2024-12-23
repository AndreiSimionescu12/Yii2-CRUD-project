<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Student $model */

$this->title = 'Adaugă student';
$this->params['breadcrumbs'][] = ['label' => 'Studenți', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-create pt-2">

    <h5 class="page-title text-muted mb-2"><?= Html::encode($this->title) ?></h5>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>