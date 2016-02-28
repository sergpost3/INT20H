<?php
    if (Yii::$app->getSession()->hasFlash('error')) {
        echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
    }
?>
...
<p class="lead">Do you already have an account on one of these sites? Click the logo to log in with it here:</p>
<?= \nodge\eauth\Widget::widget(array('action' => 'site/login')); ?>