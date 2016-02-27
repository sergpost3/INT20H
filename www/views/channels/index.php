Name: <?= $video->name; ?><br>
Text: <?= $video->text; ?><br>
Video: <?= $video->video; ?><br>
likes_count: <?= $video->likes_count; ?><br>
dislikes_count: <?= $video->dislikes_count; ?><br>
views_count: <?= $video->views_count; ?><br><br><br><br>

<?= $this->render("//_partials/comments"); ?>