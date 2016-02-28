<div class="row">
    <div class="page-video col s9">
        <div class="card-video">
            <?= $video->video; ?>
        </div>

        <div class="row card-action ">
            <div class="col s6 p0 actions">
                <a class="waves-effect waves-light btn green darken-3 video-likes"><i class="small material-icons">thumb_up</i>
                    <span id="likes"><?= $video->likes_count; ?></span></a>
                <a class="waves-effect waves-light btn red accent-4 video-dislikes"><i class="small material-icons">thumb_down</i>
                    <span id="dislikes"><?= $video->dislikes_count; ?></span></a>
                <span class="waves-effect waves-light btn deep-purple"><i class="small material-icons">visibility</i><?= $video->views_count; ?></span>
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

        <?php echo $this->render( "//_partials/comments", [ "video" => $video, "comments" => $comments ] ); ?>
    </div>
    <div class="col s3 sideBar">
        <h3>Favourite categories</h3>
        <a href="">Category</a>
        <a href="">Category</a>
        <a href="">Category</a>
        <h3>Recently viewed</h3>
        <a href=""><img src=".../web/content/Video-Wordpress.png" alt=""></a>
        <a href=""><img src=".../web/content/Video-Wordpress.png" alt=""></a>
        <a href=""><img src=".../web/content/Video-Wordpress.png" alt=""></a>
        <form action="#" class="container">
            <h4>Choose audience</h4>
            <div class="row">
                <div class="col s7">
                    <h5>Gender</h5>
                    <p>
                      <input name="group1" type="radio" id="test1" />
                      <label for="test1">Male</label>
                    </p>
                    <p>
                      <input name="group1" type="radio" id="test2" />
                      <label for="test2">Female</label>
                    </p>
                     <p>
                      <input name="group1" type="radio" id="test3" />
                      <label for="test3">All</label>
                    </p>
                </div>
                <div class="col s7">
                    <h5>Social Networks</h5>
                    <select class="browser-default">
                        <option value="0" disabled selected>Choose your option</option>
                        <option value="1">Facebook</option>
                        <option value="2">VK</option>
                    </select>
                </div>
                <div class="col s7">
                    <h5>Age</h5>
                    <p class="range-field">
                      <input type="number" id="test4" min="0" max="99">
                      <input type="number" id="test5" min="1" max="100">
                    </p>
                </div>
                <div class="col s7">
                    <input type="submit" class="btn">
                </div>
            </div> 
        </form>
    </div>
</div>