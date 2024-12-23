<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Student $model */

$this->title = $model->last_name . ' ' . $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-view">

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Detalii Student: <?= Html::encode($this->title) ?></h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Facultate</th>
                    <th>Specializare</th>
                    <th>Grupă</th>
                    <th>An de studiu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= Html::encode($model->last_name) ?></td>
                    <td><?= Html::encode($model->first_name) ?></td>
                    <td><?= Html::encode($model->faculty) ?></td>
                    <td><?= Html::encode($model->specialization) ?></td>
                    <td><?= Html::encode($model->group) ?></td>
                    <td><?= Html::encode($model->year) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <?= Html::a('Înapoi', ['index'], ['class' => 'btn btn-secondary']) ?>
            <div>
                <?= Html::a('Modifică', ['update', 'id' => $model->id], ['class' => 'btn btn-primary me-2']) ?>
                <?= Html::a('Șterge', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Ești sigur că vrei să ștergi acest student?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    </div>

</div>