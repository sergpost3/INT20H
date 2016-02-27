<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo"><img src="/web/content/logo2.png" alt="site_logo"></a>
        <ul class="right hide-on-med-and-down">
            <?php foreach($menu as $item) : ?>
                <li><a href="/category/<?= $item->url; ?>"><?= $item->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>