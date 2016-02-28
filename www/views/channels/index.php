<?php
use yii\helpers\Url;
?>
<div class="page-video">
    <div class="card-video">
        <?= $video->video; ?>
    </div>

    <div class="row card-action ">
        <div class="col s6 p0 actions">
            <a class="waves-effect waves-light btn green darken-3 video-likes"><i class="small material-icons">thumb_up</i>
                <span id="likes"><?= $video->likes_count; ?></span></a>
            <a class="waves-effect waves-light btn red accent-4 video-dislikes"><i class="small material-icons">thumb_down</i>
                <span id="dislikes"><?= $video->dislikes_count; ?></span></a>
            <span class="waves-effect waves-light btn deep-purple"><i class="small material-icons">visibility</i><span><?= $video->views_count; ?></span></span>
        </div>
        <div class="col s6 p0 share">
            <a href="http://vk.com/share.php?url=http://<?= $_SERVER["HTTP_HOST"]; ?>/video/<?= $video->url; ?>"target="blank"><img src="/web/images/share_vk.png"></a>
            <a href="http://www.facebook.com/sharer.php?u=http://<?= $_SERVER["HTTP_HOST"]; ?>/video/<?= $video->url; ?>" target="blank"><img src="/web/images/share_facebook.png"></a>
        </div>
    </div>
    <div class="card-content">
        <h3><?= $video->name; ?></h3>

        <p><?= $video->text; ?></p>
    </div>

    <?php echo $this->render( "//_partials/comments", [ "video" => $video, "comments" => $comments ] ); ?>
</div>