<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <title><?php echo $data['title'] . ' - ' . SITETITLE; //SITETITLE defined in app/core/config.php ?></title>

    <!-- CSS -->
    <?php
    helpers\assets::css(array(
        helpers\url::template_path() . 'css/style.css',
        helpers\url::template_path() . 'css/bootstrap.css'
    ))
    ?>

</head>
<body>

<nav role="navigation" class="navbar navbar-fixed-top navbar-inverse" id="top_menu">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <a href="http://businesangola/" class="navbar-brand" id="buttoom_direito_menu">Busines Angola</a>
    </div>

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="">A empresa</a></li>
            <li class="placeholder menu-li "><a href="<?php echo DIR . 'palestras' ?>">Palestras</a></li>
            <li class="placeholder menu-li"><a href="<?php echo DIR . 'consultoria' ?>">Consultorias</a></li>
            <li class="placeholder menu-li"><a href="<?php echo DIR . 'cursos' ?>">Nossos Cursos</a></li>
            <li class="placeholder menu-li"><a href="<?php echo DIR . 'midias' ?>">Mídias</a></li>
            <li class="placeholder menu-li"><a href="<?php echo DIR . 'atividades' ?>">Atividades</a></li>
            <li class="placeholder menu-li"><a href="<?php echo DIR . 'parceiros' ?>">Parceiros</a></li>
        </ul>
    </div>

</nav>

<div class="container">
