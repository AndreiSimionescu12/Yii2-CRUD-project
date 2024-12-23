<?php

use app\models\Student;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Studenți';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <div class="d-flex justify-content-start align-items-center mb-4">
        <h5 class="mb-0 me-3"><?= Html::encode($this->title) ?></h5>
        <p class="mb-0">
            <?= Html::a('Adaugă student', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Lista Studenților</h5>
        </div>
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-sm table-striped table-bordered table-hover'],
                'columns' => [
                    [
                        'class' => ActionColumn::className(),
                        'header' => 'Acțiuni',
                        'template' => '{view} {update} {delete}',
                        'headerOptions' => ['class' => 'custom-header text-center'],
                        'contentOptions' => ['class' => 'text-center'],
                        'buttons' => [
                            'view' => function ($url) {
                                return Html::a('<i class="fas fa-eye"></i>', $url, ['class' => 'btn btn-sm btn-primary']);
                            },
                            'update' => function ($url) {
                                return Html::a('<i class="fas fa-edit"></i>', $url, ['class' => 'btn btn-sm btn-warning']);
                            },
                            'delete' => function ($url) {
                                return Html::a('<i class="fas fa-trash"></i>', $url, [
                                    'class' => 'btn btn-sm btn-danger',
                                    'data-confirm' => 'Ești sigur că vrei să ștergi acest student?',
                                    'data-method' => 'post',
                                ]);
                            },
                        ],
                    ],
                    [
                        'attribute' => 'id',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'last_name',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'first_name',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'faculty',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'specialization',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'group',
                        'enableSorting' => false,
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                    [
                        'attribute' => 'year',
                        'enableSorting' => false,
                        'contentOptions' => ['class' => 'text-center'],
                        'headerOptions' => ['class' => 'custom-header'],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>