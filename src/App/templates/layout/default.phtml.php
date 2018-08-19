<?php
$this->headLink()
    ->prependStylesheet($this->basePath('css/extra.css'))
    ->prependStylesheet('https://use.fontawesome.com/releases/v5.0.6/css/all.css')
    ->prependStylesheet('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

$this->inlineScript()
    ->prependFile($this->basePath('js/global.js'))
    ->prependFile('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')
    ->prependFile('https://code.jquery.com/jquery-3.3.1.min.js');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="https://framework.zend.com/ico/favicon.ico"/>
    <?= $this->headTitle('The Dialga Team bot')->setSeparator(' - ')->setAutoEscape(false) ?>
    <?= $this->headMeta() ?>
    <?= $this->headLink() ?>
</head>
<body class="app">
<header class="app-header">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: darkorange" role="navigation">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="<?= $this->url('home') ?>">
                <img src="<?= $this->basePath('img/logo.png') ?>" height="32"/>
                The Dialga Team Bot
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="#navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $this->url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://aggressivegaming.org">Back to forum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="app-content">
    <main class="container">
        <?= $this->content ?>
    </main>
</div>

<footer class="app-footer">
    <div class="container">
        <hr/>
        <p> &copy; 2005 - <?= date('Y') ?> by Zend Technologies Ltd. All rights reserved. </p>
        <p> &copy; 2005 - <?= date('Y') ?> by The Dialga Team. </p>
    </div>
</footer>

<?= $this->inlineScript() ?>
</body>
</html>