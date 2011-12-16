<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="<?= $description ?>" />
        <link rel="stylesheet" href="<?= $config['url'] ?>/template/css/style.css" media="all" />
        <title><?= $mainTitle ?></title>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1><a href="<?= $config['url'] ?>" title="На главную"><?= $config['title'] ?></a></h1>
            </header>
            <nav>
                <ul>
                    <li><a href="<?= $config['url'] ?>" class="current">Главная</a></li>
                    <li><a href="<?= $config['url'] ?>/?page=about">О нас</a></li>
                    <li><a href="<?= $config['url'] ?>/?page=contact">Контакты</a></li>
                </ul>
            </nav>
            <?= $content ?>
            <aside>
                <section>
                    <h4>Меню</h4>
                    <ul>
                        <li><a href="#">Пункт 1</a></li>
                        <li><a href="#">Пункт 2</a></li>
                        <li><a href="#">Пункт 3</a></li>
                        <li><a href="#">Пункт 4</a></li>
                        <li><a href="#">Пункт 5</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Меню</h4>
                    <ul>
                        <li><a href="#">Пункт 1</a></li>
                        <li><a href="#">Пункт 2</a></li>
                        <li><a href="#">Пункт 3</a></li>
                        <li><a href="#">Пункт 4</a></li>
                        <li><a href="#">Пункт 5</a></li>
                    </ul>
                </section>
            </aside>
            <div class="clear"></div>
            <footer>
                &copy; <?= date('Y') ?> &laquo;<?= $config['title'] ?>&raquo;
            </footer>
        </div> <!-- .wrapper -->
    </body>
</html>
