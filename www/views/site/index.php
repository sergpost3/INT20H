<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
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