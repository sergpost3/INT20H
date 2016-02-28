<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo"><img src="/web/content/logo2.png" alt="site_logo"></a>
        <?php if(Yii::$app->getUser()->isGuest) : ?>
            <div class="pull-right auth-widget">
                <?= \nodge\eauth\Widget::widget(array('action' => 'site/login')); ?>
            </div>
        <?php endif; ?>
        <ul class="right hide-on-med-and-down">
            <?php foreach($menu as $item) : ?>
                <li><a href="/category/<?= $item->url; ?>"><?= $item->name; ?></a></li>
            <?php endforeach; ?>
            <?php if(!Yii::$app->getUser()->isGuest) : ?>
                <li><a href="/logout">Logout</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>