<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

/*$identity = Yii::$app->getUser()->getIdentity();
var_dump($identity->profile);
if(Yii::$app->getUser()->isGuest){
    echo'11111111111111111111';
}
else
echo'222222222222222222222';*/
?>
<h2 class="page-header"><?= $header; ?></h2>
<div class="row videos-list">
    <?php foreach( $videos as $video ) : ?>
        <div class="col s6">
            <a href="/video/<?= $video->url; ?>">
                <div class="card-image">
                    <img src="<?= $video->image; ?>">
                    <span class="card-title"><?= $video->name; ?></span>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>