<!DOCTYPE html>
<html>

<head lang="fr">
    <meta charset="UTF-8">
    <title>Rêve de Libellule</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/rdl/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/rdl/library/css/style.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/wp-content/themes/rdl/img/LOGO.png" />
</head>

<body class="woocommerce">

<nav id="mainmenu" class="navbar navbar-default navbar-static-top">
    <div class="container-fluid menu">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <img class="img_header" src="<?php bloginfo('url'); ?>/wp-content/themes/rdl/img/LOGO.png" alt="logo_reves_de_libellule">
            </a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <div class="menu-header">
                <div class="row head-quote">
                    <div class="col-xs-8 pull-right">
                        <?php wp_nav_menu(array(
                            'menu' => 'title_header',
                            array(
                                'walker' => new wp_bootstrap_navwalker()
                            ))); ?>
                    </div>
                </div>




                <div class="row menu-principal">
                    <div class="col-xs-8 pull-right">
                        <?php wp_nav_menu(array(
                            'menu' => 'title_li',
                            array(
                                'class' => 'menu-header nav navbar-nav navbar-right pull-right',
                                'walker' => new wp_bootstrap_navwalker()
                            ))); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>