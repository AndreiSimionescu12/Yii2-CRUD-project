<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <style>
            #header .container {
                margin: 0;
                padding: 0;
                padding-left: 30px;
            }

            #main .container {
                margin: 0;
                padding: 0;
                padding-top: 30px;
                padding-left: 30px;
            }

            #main .container-fluid {
                padding-top: 60px;
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top container-fluid']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Studenți', 'url' => ['/student/index']],
                ['label' => 'Despre', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest
                    ? ['label' => 'Logare', 'url' => ['/site/login']]
                    : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
            ]
        ]);
        NavBar::end();
        ?>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container-fluid">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <div class="bg-light shadow rounded p-3 mb-2">
                    <?= Breadcrumbs::widget([
                        'options' => [
                            'class' => 'breadcrumb mb-0',
                            'style' => 'background-color: transparent; font-size: 1.1rem; color: #111;'
                        ],
                        'itemTemplate' => "<li class='breadcrumb-item' style='color: #111;'>{link}</li>\n",
                        'activeItemTemplate' => "<li class='breadcrumb-item active' style='color: #555;' aria-current='page'>{link}</li>\n",
                        'links' => $this->params['breadcrumbs']
                    ]) ?>
                </div>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>


    <footer id="footer" class="mt-auto py-3 bg-black">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start text-white">&copy; Andrei Simionescu <?= date('Y') ?></div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>