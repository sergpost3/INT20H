<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Categories;

AppAsset::register( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode( $this->title ) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/web/css/style.css">
    <link rel="stylesheet" href="/web/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $this->render( "//_partials/menu", [ "menu" => Categories::find()->all() ] ); ?>
    <div class="content container">
        <?= $content ?>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Increment <?= date( 'Y' ) ?></p>

            <p class="pull-right"></p>
        </div>
    </footer>

</div>

<script src="/web/js/jquery-2.2.0.js"></script>
<script src="/web/js/materialize.js"></script>
<script src="/web/js/smartcore.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
