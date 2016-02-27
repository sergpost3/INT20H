<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/web/css/style.css">
    <link rel="stylesheet" href="/web/css/materialize.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Motherlover</a></li>
            <li><a href="sass.html">Video1</a></li>
            <li><a href="sass.html">Video2</a></li>
            <li><a href="sass.html">Video3</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="content container">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Increment <?= date('Y') ?></p>

                <p class="pull-right"></p>
            </div>
        </footer>
    </div>

</div>

<script src="/web/js/jquery-2.2.0.js"></script>
<script src="/web/js/materialize.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
