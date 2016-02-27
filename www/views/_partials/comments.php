<form class="add_comment">
    <div class="input-field">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Write your comment</label>
    </div>
    <button class="btn waves-effect waves-light deep-purple" type="submit" name="action">Send
        <i class="material-icons right">send</i>
    </button>
</form>



<div class="comments">
    <?php foreach($comments as $comment) : ?>
    <div class="comment row">
        <div class="col s2">
            <img src="<?= $comment->user->image; ?>" class="avatar">
            <h6 class="name"><?= $comment->user->name; ?></h6>
        </div>
        <div class="col s10">
            <p><?= $comment->comment; ?></p>
            <div class="row card-action ">
                <div class="col s6 p0 actions">
                    <a class="waves-effect waves-light btn green darken-3">Likes: <span id="likes"><?= $comment->likes_count; ?></span></a>
                    <a class="waves-effect waves-light btn red accent-4">Dislikes: <span id="dislikes"><?= $comment->dislikes_count; ?></span></a>
                </div>
                <div class="col s6 p0 share">
                    <a href=""><img src="/web/images/share_vk.png"></a>
                    <a href=""><img src="/web/images/share_facebook.png"></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>