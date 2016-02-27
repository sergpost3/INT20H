<div class="page-video">
    <div class="card-video">
        <?= $video->video; ?>
    </div>

    <div class="row card-action ">
        <div class="col s6 p0 actions">
            <a class="waves-effect waves-light btn green darken-3">Likes:
                <span id="likes"><?= $video->likes_count; ?></span></a>
            <a class="waves-effect waves-light btn red accent-4">Dislikes:
                <span id="dislikes"><?= $video->dislikes_count; ?></span></a>
            <span class="waves-effect waves-light btn red accent-4">Views: <?= $video->views_count; ?></span>
        </div>
        <div class="col s6 p0 share">
            <a href=""><img src="/web/images/share_vk.png"></a>
            <a href=""><img src="/web/images/share_facebook.png"></a>
        </div>
    </div>
    <div class="card-content">
        <h3><?= $video->name; ?></h3>

        <p><?= $video->text; ?></p>
    </div>

    <?php echo $this->render( "//_partials/comments", [ "comments" => $comments ] ); ?>
</div>